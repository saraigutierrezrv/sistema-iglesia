<?php

namespace App\Filament\Mckinney\Resources\Becarios\Pages;

use App\Filament\Mckinney\Resources\Becarios\BecarioResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBecario extends ViewRecord
{
    protected static string $resource = BecarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
