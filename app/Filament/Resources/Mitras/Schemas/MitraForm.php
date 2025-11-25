<?php

namespace App\Filament\Resources\Mitras\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class MitraForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_mitra')
                    ->label('Nama Mitra/Partner')
                    ->required(),
                Textarea::make('deskripsi')
                    ->columnSpanFull(),
                FileUpload::make('logo')
                    ->label('Logo Mitra')
                    ->image()
                    ->disk('public')
                    ->directory('mitra-logos')
                    ->maxFiles(1)
                    ->required(),
                // admin_id hidden and auto-filled
            ]);
    }
}
