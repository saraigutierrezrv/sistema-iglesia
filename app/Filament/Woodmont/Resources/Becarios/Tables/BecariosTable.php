<?php

namespace App\Filament\Woodmont\Resources\Becarios\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BecariosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //TextColumn::make('panel_id')
                  //  ->searchable(),
                TextColumn::make('nombre_completo')
                    ->searchable(),
                TextColumn::make('fecha_nacimiento')
                    ->date()
                    ->sortable(),
                TextColumn::make('telefono')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
