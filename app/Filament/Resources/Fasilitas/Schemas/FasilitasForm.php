<?php

namespace App\Filament\Resources\Fasilitas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class FasilitasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_fasilitas')
                    ->label('Nama Fasilitas')
                    ->required(),
                Textarea::make('deskripsi')
                    ->columnSpanFull(),
                FileUpload::make('foto')
                    ->label('Foto Fasilitas')
                    ->image()
                    ->disk('public')
                    ->directory('fasilitas-images')
                    ->maxFiles(1)
                    ->required(),
            ]);
    }
}
