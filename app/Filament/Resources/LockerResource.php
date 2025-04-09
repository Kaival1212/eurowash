<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LockerResource\Pages;
use App\Filament\Resources\LockerResource\RelationManagers;
use App\Models\Locker;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LockerResource extends Resource
{
    protected static ?string $model = Locker::class;

    protected static ?string $navigationIcon = 'heroicon-o-lock-closed';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('locker_number')
                    ->required(),
                // Forms\Components\TextInput::make('user_id')
                //     ->numeric(),

                Select::make('store_id')
                    ->relationship('store', 'name')
                    ->preload()
                    ->searchable()
                    ->required(),


                Forms\Components\Select::make('status')
                    ->options([
                        'available' => 'Available',
                        'inUse' => 'In Use',
                        'unavailable' => 'Unavailable',
                    ])
                    ->default('available')
                    ->required(),
                Forms\Components\TextInput::make('code')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('locker_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('store.name')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('code')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListLockers::route('/'),
            'create' => Pages\CreateLocker::route('/create'),
            'edit' => Pages\EditLocker::route('/{record}/edit'),
        ];
    }
}
