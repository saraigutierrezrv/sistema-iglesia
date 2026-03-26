<?php

namespace App\Filament\Resources\Salidas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SalidaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('panel_id')
                    ->required()
                    ->default('san-nicolas'),
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
