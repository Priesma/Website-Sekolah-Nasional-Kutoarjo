<?php

namespace App\Filament\Resources\Yayasans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class YayasanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->label('Nama Yayasan')
                    ->required(),
                Textarea::make('deskripsi')
                    ->columnSpanFull(),
                FileUpload::make('gambar')
                    ->label('Foto Yayasan')
                    ->image()
                    ->disk('public')
                    ->directory('yayasan-images')
                    ->maxFiles(1)
                    ->required(),
            ]);
    }
}
