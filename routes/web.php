<?php

use App\Livewire\AboutUs;
use App\Livewire\EmployeeDashboard;
use App\Livewire\LockerBooking;
use App\Livewire\Lockers;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\UserOrder;
use App\Mail\RetryPaymentLink;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Webhook;
use App\Livewire\UserBookings;
use App\Mail\PaymentSucessGiveCode;
use App\Models\LockerOrders;
use App\Models\store;
use App\Livewire\Features;
use App\Livewire\HowItWorks;
use App\Livewire\Location;
use App\Livewire\Services;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Route;
use Stripe\Entitlements\Feature;

Route::get('/', function () {
    $store = store::where('name', 'Eurowash')->firstOrFail();
    return view('eurowash', compact('store'));
})->name('home');

Route::get('/features', Features::class)
    ->name('features');

Route::get('/services', Services::class)
    ->name('services');

Route::get('/location', Location::class)
    ->name('location');

Route::get('/about', AboutUs::class)
    ->name('about');

    #howitworks
Route::get('/howitworks', HowItWorks::class)
    ->name('howitworks');

Route::middleware(['auth' , 'Employee'])->group(
    function(){

        Route::get('/dashboard' , EmployeeDashboard::class)->name('dashboard');

    }
);

Route::get('/store/{slug}/smart-lockers' , Lockers::class)
    ->name('lockers');


Route::get('/store/eurowash/smart-lockers' , Lockers::class)
->name('eurowash.lockers');

Route::get('/{slug}/lockers/book/{locker}', LockerBooking::class)
->middleware(middleware: ['lockerInUse'])
->name('lockers.book');


// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('/user-bookings', UserBookings::class)
        ->middleware(['auth'])
        ->name('user.bookings');
});


Route::get('/order/{orderID}' , UserOrder::class)
->name('user.order');

Route::post('/stripe/webhook', function (Request $request) {

    Stripe::setApiKey(config('services.stripe.secret'));

    $payload = @file_get_contents('php://input');
    $sigHeader = $request->header('Stripe-Signature');
    $endpointSecret = config('services.stripe.webhook_secret');

    try {
        $event = Webhook::constructEvent($payload, $sigHeader, $endpointSecret);
    } catch (\UnexpectedValueException $e) {
        return response('Invalid payload', 400);
    } catch (\Stripe\Exception\SignatureVerificationException $e) {
        return response('Invalid signature', 400);
    }



    if ($event->type === 'checkout.session.completed') {
        $session = $event->data->object;

        // Find order by payment_id (session ID)

        $order = LockerOrders::where('payment_id', $session->id)->first();
        // add invoice link



        if ($order) {
            $order->payment = 'paid';
            $order->payment_id = $session->id;
            $order->status = 'completed';
            $order->invoice_link = $session->invoice_url;
            $order->save();

            Mail::to($order->email)->send(new PaymentSucessGiveCode($order , $order->name , $order->locker));
        }
    }

    if ($event->type === 'payment_intent.payment_failed') {
        $intent = $event->data->object;

        $orderId = $intent->metadata->order_id ?? null;

        if (!$orderId) {
            return response()->json(['message' => 'No order metadata'], 400);
        }

        $order = LockerOrders::find($orderId);


        if ($order) {
            $order->payment = 'failed';
            $order->saveQuietly();

            $user = \App\Models\User::find($order->user_id);
            Mail::to($user->email)->send(new RetryPaymentLink($order->locker, $order, $user));
        }
    }



    return response('Webhook received', 200);
});

require __DIR__.'/auth.php';
