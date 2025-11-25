<?php

namespace App\Filament\Resources\Mitras\Pages;

use App\Filament\Resources\Mitras\MitraResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateMitra extends CreateRecord
{
    protected static string $resource = MitraResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['admin_id'] = Auth::guard('admin')->id();
        return $data;
    }
}
