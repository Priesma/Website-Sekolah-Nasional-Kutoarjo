<?php

namespace App\Filament\Resources\Visis\Pages;

use App\Filament\Resources\Visis\VisiResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewVisi extends ViewRecord
{
    protected static string $resource = VisiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
