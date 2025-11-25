<?php

namespace App\Filament\Resources\Misis\Pages;

use App\Filament\Resources\Misis\MisiResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateMisi extends CreateRecord
{
    protected static string $resource = MisiResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['admin_id'] = Auth::guard('admin')->id();
        return $data;
    }
}
