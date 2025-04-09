<?php

namespace App\Filament\Resources\LockerOrdersResource\Pages;

use App\Filament\Resources\LockerOrdersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLockerOrders extends EditRecord
{
    protected static string $resource = LockerOrdersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
