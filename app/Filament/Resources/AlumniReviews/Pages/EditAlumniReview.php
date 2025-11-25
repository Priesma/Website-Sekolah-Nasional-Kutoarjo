<?php

namespace App\Filament\Resources\AlumniReviews\Pages;

use App\Filament\Resources\AlumniReviews\AlumniReviewResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditAlumniReview extends EditRecord
{
    protected static string $resource = AlumniReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['admin_id'] = Auth::guard('admin')->id();
        return $data;
    }
}
