<?php

namespace App\Filament\Resources\Visis\Pages;

use App\Filament\Resources\Visis\VisiResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateVisi extends CreateRecord
{
    protected static string $resource = VisiResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['admin_id'] = Auth::guard('admin')->id();
        return $data;
    }
}
