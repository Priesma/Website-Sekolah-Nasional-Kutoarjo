<?php

namespace App\Filament\Resources\AlumniReviews;

use App\Filament\Resources\AlumniReviews\Pages\CreateAlumniReview;
use App\Filament\Resources\AlumniReviews\Pages\EditAlumniReview;
use App\Filament\Resources\AlumniReviews\Pages\ListAlumniReviews;
use App\Filament\Resources\AlumniReviews\Pages\ViewAlumniReview;
use App\Filament\Resources\AlumniReviews\Schemas\AlumniReviewForm;
use App\Filament\Resources\AlumniReviews\Schemas\AlumniReviewInfolist;
use App\Filament\Resources\AlumniReviews\Tables\AlumniReviewsTable;
use App\Models\AlumniReview;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AlumniReviewResource extends Resource
{
    protected static ?string $model = AlumniReview::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';
    protected static UnitEnum|string|null $navigationGroup = 'Manajemen Konten';
    protected static ?string $modelLabel = 'Testimoni Alumni';
    protected static ?string $pluralModelLabel = 'Testimoni Alumni';
    protected static ?string $navigationLabel = 'Testimoni Alumni';
    protected static ?int $navigationSort = 5;
    

    public static function form(Schema $schema): Schema
    {
        return AlumniReviewForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AlumniReviewInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AlumniReviewsTable::configure($table);
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
            'index' => ListAlumniReviews::route('/'),
            'create' => CreateAlumniReview::route('/create'),
            'view' => ViewAlumniReview::route('/{record}'),
            'edit' => EditAlumniReview::route('/{record}/edit'),
        ];
    }
}
