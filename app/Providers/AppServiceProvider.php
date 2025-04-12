<?php

namespace App\Providers;

use App\Models\LockerOrders;
use App\Policies\LockerOrdersPolicy;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    protected $policies = [
        LockerOrders::class => LockerOrdersPolicy::class,
    ];
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
