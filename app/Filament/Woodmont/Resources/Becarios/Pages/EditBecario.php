<?php

namespace App\Filament\Woodmont\Resources\Becarios\Pages;

use App\Filament\Woodmont\Resources\Becarios\BecarioResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditBecario extends EditRecord
{
    protected static string $resource = BecarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
