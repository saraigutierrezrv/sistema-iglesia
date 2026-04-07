<?php

namespace App\Filament\Woodmont\Resources\Salidas\Pages;

use App\Filament\Woodmont\Resources\Salidas\SalidaResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSalida extends EditRecord
{
    protected static string $resource = SalidaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
