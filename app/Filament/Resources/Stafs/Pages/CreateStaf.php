<?php

namespace App\Filament\Resources\Stafs\Pages;

use App\Filament\Resources\Stafs\StafResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateStaf extends CreateRecord
{
    protected static string $resource = StafResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['admin_id'] = Auth::guard('admin')->id();
        return $data;
    }
}
