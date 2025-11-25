<?php

namespace App\Filament\Resources\Tujuans\Pages;

use App\Filament\Resources\Tujuans\TujuanResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateTujuan extends CreateRecord
{
    protected static string $resource = TujuanResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['admin_id'] = Auth::guard('admin')->id();
        return $data;
    }
}
