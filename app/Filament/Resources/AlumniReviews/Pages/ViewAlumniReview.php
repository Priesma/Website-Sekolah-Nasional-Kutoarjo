<?php

namespace App\Filament\Resources\AlumniReviews\Pages;

use App\Filament\Resources\AlumniReviews\AlumniReviewResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAlumniReview extends ViewRecord
{
    protected static string $resource = AlumniReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
