<?php

namespace App\Filament\Mckinney\Resources\Becarios;

use App\Filament\Mckinney\Resources\Becarios\Pages\CreateBecario;
use App\Filament\Mckinney\Resources\Becarios\Pages\EditBecario;
use App\Filament\Mckinney\Resources\Becarios\Pages\ListBecarios;
use App\Filament\Mckinney\Resources\Becarios\Pages\ViewBecario;
use App\Filament\Mckinney\Resources\Becarios\Schemas\BecarioForm;
use App\Filament\Mckinney\Resources\Becarios\Schemas\BecarioInfolist;
use App\Filament\Mckinney\Resources\Becarios\Tables\BecariosTable;
use App\Models\Becario;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BecarioResource extends Resource
{
    protected static ?string $model = Becario::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nombre_completo';

    public static function form(Schema $schema): Schema
    {
        return BecarioForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BecarioInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BecariosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBecarios::route('/'),
            'create' => CreateBecario::route('/create'),
            'view' => ViewBecario::route('/{record}'),
            'edit' => EditBecario::route('/{record}/edit'),
        ];
    }
    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return parent::getEloquentQuery()->where('panel_id', 'mckinney');
    }
}
