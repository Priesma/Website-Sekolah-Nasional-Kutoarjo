<?php

namespace App\Filament\Resources\Visis\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class VisiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('isi')
                    ->label('Isi Visi')
                    ->required()
                    ->columnSpanFull(),
                // admin_id hidden and auto-filled
            ]);
    }
}
