<?php

namespace App\Filament\Resources\LockerOrdersResource\Pages;

use App\Filament\Resources\LockerOrdersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLockerOrders extends ListRecords
{
    protected static string $resource = LockerOrdersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
