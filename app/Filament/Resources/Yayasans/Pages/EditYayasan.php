<?php

namespace App\Filament\Resources\Yayasans\Pages;

use App\Filament\Resources\Yayasans\YayasanResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditYayasan extends EditRecord
{
    protected static string $resource = YayasanResource::class;

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
