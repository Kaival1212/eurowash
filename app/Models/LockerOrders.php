<?php

namespace App\Models;

use App\Jobs\ReleaseLocker;
use App\Mail\LockerOrderConfirmed;
use App\Mail\OrderCancle;
use App\Mail\OrderCompleted;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class LockerOrders extends Model
{
    /** @use HasFactory<\Database\Factories\LockerOrdersFactory> */
    use HasFactory;

    protected $fillable = [
        'locker_id',
        'name',
        'email',
        'phone',
        'price',
        'status',
        'before_code',
        'after_code',
        'notes',
        'payment_link',
        'payment_id',
        "invoice_link",
        'payment'
    ];

    public function locker()
    {
        return $this->belongsTo(Locker::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {

        static::updated(function ($order): void{

            if ( $order->isDirty('status') && $order->status == 'confirmed' ) {
                if ($order->email){
                    Mail::to($order->email)->send(new LockerOrderConfirmed(
                        $order,
                        $order->user,
                        $order->locker,
                        $order->locker->store
                    ));
                }
}

            if ($order->isDirty('status') && $order->status == 'cancelled') {
                if ($order->email){
                    Mail::to($order->email)->send(new OrderCancle());
                }

                $locker = $order->locker;
                $locker->status = 'available';
                $locker->save();

            }

            if ($order->status === 'completed' && $order->price && !$order->payment_link) {
                try {

                    Stripe::setApiKey(config('services.stripe.secret'));

                    $checkout = Session::create([
                        'payment_method_types' => ['card'],
                        'line_items' => [[
                            'price_data' => [
                                'currency' => 'gbp',
                                'unit_amount' => intval($order->price * 100),
                                'product_data' => [
                                    'name' => 'Locker Order #' . $order->id,
                                ],
                            ],
                            'quantity' => 1,
                        ]],
                        'mode' => 'payment',
                        'invoice_creation' => ['enabled' => true],
                        'automatic_tax' => ['enabled' => true],
                        'success_url' => route('user.order', ['orderID' => $order->id]),
                        'cancel_url' => route('user.order', ['orderID' => $order->id]),
                        'metadata' => [
                            'order_id' => $order->id,
                        ],
                        'payment_intent_data' => [
                            'metadata' => [
                                'order_id' => $order->id,
                            ],
                        ],
                    ]);

                    $order->payment_link = $checkout->url;
                    Mail::to($order->email)->send(mailable: new OrderCompleted($order , $order->user ,$checkout->url ));
                    $order->payment_id = $checkout->id;


                    $order->save(); // Prevent infinite loop

                } catch (\Exception $e) {
                    logger()->error("Stripe error for Order #{$order->id}: " . $e->getMessage());
                }
            }

            if ($order->isDirty('payment') && $order->payment === 'paid') {
                ReleaseLocker::dispatch($order)->delay(now()->addHour());
            }


        });





    }
}
