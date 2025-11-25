<?php

namespace App\Filament\Resources\AlumniReviews\Pages;

use App\Filament\Resources\AlumniReviews\AlumniReviewResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAlumniReviews extends ListRecords
{
    protected static string $resource = AlumniReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
