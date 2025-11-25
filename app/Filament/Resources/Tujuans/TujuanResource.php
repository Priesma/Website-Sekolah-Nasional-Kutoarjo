<?php

namespace App\Filament\Resources\Tujuans;

use App\Filament\Resources\Tujuans\Pages\CreateTujuan;
use App\Filament\Resources\Tujuans\Pages\EditTujuan;
use App\Filament\Resources\Tujuans\Pages\ListTujuans;
use App\Filament\Resources\Tujuans\Pages\ViewTujuan;
use App\Filament\Resources\Tujuans\Schemas\TujuanForm;
use App\Filament\Resources\Tujuans\Schemas\TujuanInfolist;
use App\Filament\Resources\Tujuans\Tables\TujuansTable;
use App\Models\Tujuan;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Support\Icons\Heroicon;

class TujuanResource extends Resource
{
    protected static ?string $model = Tujuan::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-flag';
    protected static UnitEnum|string|null $navigationGroup = 'Pengaturan Profil';
    protected static ?string $navigationLabel = 'Tujuan';
    protected static ?string $modelLabel = 'Tujuan';
    protected static ?string $pluralModelLabel = 'Tujuan';
    protected static ?int $navigationSort = 1;
    

    public static function form(Schema $schema): Schema
    {
        return TujuanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TujuansTable::configure($table);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TujuanInfolist::configure($schema);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTujuans::route('/'),
            'create' => CreateTujuan::route('/create'),
            'view' => ViewTujuan::route('/{record}'),
            'edit' => EditTujuan::route('/{record}/edit'),
        ];
    }
}
