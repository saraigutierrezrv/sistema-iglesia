<?php

namespace App\Filament\Mckinney\Resources\Entradas\Pages;

use App\Filament\Mckinney\Resources\Entradas\EntradaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEntradas extends ListRecords
{
    protected static string $resource = EntradaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
