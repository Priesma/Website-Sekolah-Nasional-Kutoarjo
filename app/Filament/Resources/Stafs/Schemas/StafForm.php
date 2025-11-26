<?php

namespace App\Filament\Resources\Stafs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class StafForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->label('Nama Staf')
                    ->required(),
                TextInput::make('jabatan'),
                Textarea::make('moto')
                    ->columnSpanFull(),
                FileUpload::make('foto')
                    ->label('Foto Profil Staf')
                    ->image()
                    ->disk('public')
                    ->directory('staf-photos')
                    ->maxFiles(1)
                    ->required(),
            ]);
    }
}
