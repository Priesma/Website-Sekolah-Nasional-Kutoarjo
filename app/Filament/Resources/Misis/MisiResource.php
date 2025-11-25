<?php

namespace App\Filament\Resources\Misis;

use App\Filament\Resources\Misis\Pages\CreateMisi;
use App\Filament\Resources\Misis\Pages\EditMisi;
use App\Filament\Resources\Misis\Pages\ListMisis;
use App\Filament\Resources\Misis\Pages\ViewMisi;
use App\Filament\Resources\Misis\Schemas\MisiForm;
use App\Filament\Resources\Misis\Schemas\MisiInfolist;
use App\Filament\Resources\Misis\Tables\MisisTable;
use App\Models\Misi;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MisiResource extends Resource
{
    protected static ?string $model = Misi::class;

    // Use the actual text column as the record title so View pages still show a title
    protected static ?string $recordTitleAttribute = 'deskripsi';

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rocket-launch';
    protected static UnitEnum|string|null $navigationGroup = 'Pengaturan Profil';
    protected static ?string $modelLabel = 'Misi';
    protected static ?string $pluralModelLabel = 'Misi';
    protected static ?string $navigationLabel = 'Misi';
    protected static ?int $navigationSort = 3;
    

    public static function form(Schema $schema): Schema
    {
        return MisiForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MisiInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MisisTable::configure($table);
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
            'index' => ListMisis::route('/'),
            'create' => CreateMisi::route('/create'),
            'view' => ViewMisi::route('/{record}'),
            'edit' => EditMisi::route('/{record}/edit'),
        ];
    }
}
