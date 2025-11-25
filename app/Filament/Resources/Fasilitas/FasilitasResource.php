<?php

namespace App\Filament\Resources\Fasilitas;

use App\Filament\Resources\Fasilitas\Pages\CreateFasilitas;
use App\Filament\Resources\Fasilitas\Pages\EditFasilitas;
use App\Filament\Resources\Fasilitas\Pages\ListFasilitas;
use App\Filament\Resources\Fasilitas\Pages\ViewFasilitas;
use App\Filament\Resources\Fasilitas\Schemas\FasilitasForm;
use App\Filament\Resources\Fasilitas\Schemas\FasilitasInfolist;
use App\Filament\Resources\Fasilitas\Tables\FasilitasTable;
use App\Models\Fasilitas;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FasilitasResource extends Resource
{
    protected static ?string $model = Fasilitas::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-building-office-2';
    protected static UnitEnum|string|null $navigationGroup = 'Manajemen Konten';
    protected static ?string $navigationLabel = 'Fasilitas';
    protected static ?string $modelLabel = 'Fasilitas';
    protected static ?string $pluralModelLabel = 'Fasilitas';
    protected static ?int $navigationSort = 4;
    

    public static function form(Schema $schema): Schema
    {
        return FasilitasForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FasilitasInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FasilitasTable::configure($table);
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
            'index' => ListFasilitas::route('/'),
            'create' => CreateFasilitas::route('/create'),
            'view' => ViewFasilitas::route('/{record}'),
            'edit' => EditFasilitas::route('/{record}/edit'),
        ];
    }
}
