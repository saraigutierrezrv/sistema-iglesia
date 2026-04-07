<?php

namespace App\Filament\Woodmont\Resources\Becarios\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Hidden;

class BecarioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('panel_id')->default('woodmont'),
                TextInput::make('nombre_completo')
                    ->required(),
                DatePicker::make('fecha_nacimiento')
                    ->required(),
                TextInput::make('telefono')
                    ->tel()
                    ->default(null),
            ]);
    }
}
