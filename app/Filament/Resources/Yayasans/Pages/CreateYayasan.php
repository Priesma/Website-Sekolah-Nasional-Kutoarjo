<?php

namespace App\Filament\Resources\Yayasans\Pages;

use App\Filament\Resources\Yayasans\YayasanResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateYayasan extends CreateRecord
{
    protected static string $resource = YayasanResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['admin_id'] = Auth::guard('admin')->id();
        return $data;
    }
}
