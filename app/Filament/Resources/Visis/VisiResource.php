<?php

namespace App\Filament\Resources\Visis;

use App\Filament\Resources\Visis\Pages\CreateVisi;
use App\Filament\Resources\Visis\Pages\EditVisi;
use App\Filament\Resources\Visis\Pages\ListVisis;
use App\Filament\Resources\Visis\Pages\ViewVisi;
use App\Filament\Resources\Visis\Schemas\VisiForm;
use App\Filament\Resources\Visis\Schemas\VisiInfolist;
use App\Filament\Resources\Visis\Tables\VisisTable;
use App\Models\Visi;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VisiResource extends Resource
{
    protected static ?string $model = Visi::class;

    // Use the actual text column as the record title so View pages still show a title
    protected static ?string $recordTitleAttribute = 'deskripsi';

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-eye';
    protected static UnitEnum|string|null $navigationGroup = 'Pengaturan Profil';
    protected static ?string $modelLabel = 'Visi';
    protected static ?string $pluralModelLabel = 'Visi';
    protected static ?string $navigationLabel = 'Visi';
    protected static ?int $navigationSort = 2;
    

    public static function form(Schema $schema): Schema
    {
        return VisiForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return VisiInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VisisTable::configure($table);
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
            'index' => ListVisis::route('/'),
            'create' => CreateVisi::route('/create'),
            'view' => ViewVisi::route('/{record}'),
            'edit' => EditVisi::route('/{record}/edit'),
        ];
    }
}
