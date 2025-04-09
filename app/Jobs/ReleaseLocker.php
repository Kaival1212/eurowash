<?php

namespace App\Jobs;

use App\Models\LockerOrders;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class ReleaseLocker implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $order;

    public function __construct(LockerOrders $order)
    {
        $this->order = $order;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $locker = $this->order->locker;

        if ($this->order->after_code) {
            $locker->code = $this->order->after_code;
        }

        $locker->status = 'available';
        $locker->save();
    }
}
