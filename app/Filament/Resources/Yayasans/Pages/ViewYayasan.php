<?php

namespace App\Filament\Resources\Yayasans\Pages;

use App\Filament\Resources\Yayasans\YayasanResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewYayasan extends ViewRecord
{
    protected static string $resource = YayasanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
