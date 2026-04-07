<?php

namespace App\Filament\Woodmont\Resources\Entradas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Hidden;

class EntradaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('panel_id')->default('woodmont'),
                TextInput::make('monto')
                    ->required()
                    ->numeric(),
                TextInput::make('categoria')
                    ->required(),
                Textarea::make('descripcion')
                    ->default(null)
                    ->columnSpanFull(),
                DatePicker::make('fecha')
                    ->required(),
                TextInput::make('comprobante')
                    ->default(null),
            ]);
    }
}
