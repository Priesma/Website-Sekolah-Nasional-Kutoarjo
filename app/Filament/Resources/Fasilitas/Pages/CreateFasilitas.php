<?php

namespace App\Filament\Resources\Fasilitas\Pages;

use App\Filament\Resources\Fasilitas\FasilitasResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateFasilitas extends CreateRecord
{
    protected static string $resource = FasilitasResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['admin_id'] = Auth::guard('admin')->id();
        return $data;
    }
}
