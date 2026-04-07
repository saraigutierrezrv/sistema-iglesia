<?php

namespace App\Filament\Woodmont\Resources\Entradas\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class EntradaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //TextEntry::make('panel_id'),
                TextEntry::make('monto')
                    ->numeric(),
                TextEntry::make('categoria'),
                TextEntry::make('descripcion')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('fecha')
                    ->date(),
                TextEntry::make('comprobante')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
