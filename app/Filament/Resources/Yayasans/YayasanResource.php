<?php

namespace App\Filament\Resources\Yayasans;

use App\Filament\Resources\Yayasans\Pages\CreateYayasan;
use App\Filament\Resources\Yayasans\Pages\EditYayasan;
use App\Filament\Resources\Yayasans\Pages\ListYayasans;
use App\Filament\Resources\Yayasans\Pages\ViewYayasan;
use App\Filament\Resources\Yayasans\Schemas\YayasanForm;
use App\Filament\Resources\Yayasans\Schemas\YayasanInfolist;
use App\Filament\Resources\Yayasans\Tables\YayasansTable;
use App\Models\Yayasan;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class YayasanResource extends Resource
{
    protected static ?string $model = Yayasan::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-building-library';
    protected static UnitEnum|string|null $navigationGroup = 'Pengaturan Profil';
    protected static ?string $navigationLabel = 'Yayasan';
    protected static ?string $modelLabel = 'Yayasan';
    protected static ?string $pluralModelLabel = 'Yayasan';
    protected static ?int $navigationSort = 4;
    

    public static function form(Schema $schema): Schema
    {
        return YayasanForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return YayasanInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return YayasansTable::configure($table);
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
            'index' => ListYayasans::route('/'),
            'create' => CreateYayasan::route('/create'),
            'view' => ViewYayasan::route('/{record}'),
            'edit' => EditYayasan::route('/{record}/edit'),
        ];
    }
}
