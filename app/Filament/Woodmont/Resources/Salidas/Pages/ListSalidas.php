<?php

namespace App\Filament\Woodmont\Resources\Salidas\Pages;

use App\Filament\Woodmont\Resources\Salidas\SalidaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSalidas extends ListRecords
{
    protected static string $resource = SalidaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
