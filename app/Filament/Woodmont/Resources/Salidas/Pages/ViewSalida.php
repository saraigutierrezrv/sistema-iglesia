<?php

namespace App\Filament\Woodmont\Resources\Salidas\Pages;

use App\Filament\Woodmont\Resources\Salidas\SalidaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSalida extends ViewRecord
{
    protected static string $resource = SalidaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
