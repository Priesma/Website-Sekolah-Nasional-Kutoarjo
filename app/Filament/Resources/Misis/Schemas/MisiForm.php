<?php

namespace App\Filament\Resources\Misis\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class MisiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('isi')
                    ->label('Isi Misi')
                    ->required()
                    ->columnSpanFull(),
                // admin_id hidden and auto-filled
            ]);
    }
}
