<?php

namespace App\Filament\Woodmont\Resources\Entradas\Pages;

use App\Filament\Woodmont\Resources\Entradas\EntradaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewEntrada extends ViewRecord
{
    protected static string $resource = EntradaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
