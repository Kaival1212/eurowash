<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LockerOrdersResource\Pages;
use App\Filament\Resources\LockerOrdersResource\RelationManagers;
use App\Models\LockerOrders;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LockerOrdersResource extends Resource
{
    protected static ?string $model = LockerOrders::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('locker_id')
                ->relationship('locker', 'locker_number')
                ->getOptionLabelFromRecordUsing(fn ($record) => $record->locker_number . ' - ' . $record->store->name)
                ->preload()
                ->searchable()
                ->required(),

                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->getOptionLabelFromRecordUsing(fn ($record) => $record->name . ' - ' . $record->email)
                    ->preload()
                    ->searchable()
                    ->required(),

                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('email')
                    ->email(),
                Forms\Components\TextInput::make('phone')
                    ->tel(),
                Forms\Components\TextInput::make('price'),
                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'confirmed' => 'Confirmed',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->default('pending')
                    ->required(),

                Forms\Components\Select::make('payment')
                    ->options([
                        'pending' => 'Pending',
                        'paid' => 'Paid',
                        'failed' => 'Failed',
                    ])
                    ->default('pending')
                    ->required(),
                Forms\Components\TextInput::make('payment_link')
                    ->url()
                    ->label('Payment Link'),

                Forms\Components\TextInput::make('before_code')
                    ->required(),

                Forms\Components\TextInput::make('after_code'),

                Forms\Components\TextInput::make('Notes'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('locker_details')
                ->label('Locker - Store')
                ->getStateUsing(fn ($record) =>
                    optional($record->locker)->locker_number . ' - ' . optional($record->locker->store)->name
                )
                ->searchable()
                ->sortable(),

                // Tables\Columns\TextColumn::make('user_id')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('price')
                    ->searchable(),
                Tables\Columns\TextColumn::make('payment')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('payment_link')
                    ->label('Payment Link')
                    ->toggleable(isToggledHiddenByDefault: true),

                    Tables\Columns\TextColumn::make('invoice_link')
                    ->label('Invoice Link')
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('before_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('after_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Notes')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLockerOrders::route('/'),
            'create' => Pages\CreateLockerOrders::route('/create'),
            'edit' => Pages\EditLockerOrders::route('/{record}/edit'),
        ];
    }
}
