<?php

namespace App\Filament\Resources\Tujuans\Pages;

use App\Filament\Resources\Tujuans\TujuanResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditTujuan extends EditRecord
{
    protected static string $resource = TujuanResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['admin_id'] = Auth::guard('admin')->id();
        return $data;
    }
}
