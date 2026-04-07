<?php

namespace App\Filament\Mckinney\Resources\Becarios\Pages;

use App\Filament\Mckinney\Resources\Becarios\BecarioResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBecarios extends ListRecords
{
    protected static string $resource = BecarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
