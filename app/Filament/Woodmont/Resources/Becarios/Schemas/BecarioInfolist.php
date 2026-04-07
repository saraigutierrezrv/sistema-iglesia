<?php

namespace App\Filament\Woodmont\Resources\Becarios\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class BecarioInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //TextEntry::make('panel_id'),
                TextEntry::make('nombre_completo'),
                TextEntry::make('fecha_nacimiento')
                    ->date(),
                TextEntry::make('telefono')
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
