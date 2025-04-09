<?php

namespace App\Filament\Widgets;


use App\Models\LockerOrders;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class LockerOrderStats extends BaseWidget
{
    protected ?string $heading = 'Locker Order Stats'; // ✅ Fixed

    protected function getCards(): array
    {
        return [
            Card::make('Total Orders', LockerOrders::count()),
            Card::make('Confirmed Orders', LockerOrders::where('status', 'confirmed')->count()),
            Card::make('Pending Orders', LockerOrders::where('status', 'pending')->count()),
            Card::make('Cancelled Orders', LockerOrders::where('status', 'cancelled')->count()),
            Card::make('Paid Orders', LockerOrders::where('payment', 'paid')->count()),
            Card::make('Total Revenue (£)', '£' . number_format(LockerOrders::where('payment', 'paid')->sum('price'), 2)),
        ];
    }
}
