<?php

namespace App\Filament\Resources\AlumniReviews\Pages;

use App\Filament\Resources\AlumniReviews\AlumniReviewResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateAlumniReview extends CreateRecord
{
    protected static string $resource = AlumniReviewResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['admin_id'] = Auth::guard('admin')->id();
        return $data;
    }
}
