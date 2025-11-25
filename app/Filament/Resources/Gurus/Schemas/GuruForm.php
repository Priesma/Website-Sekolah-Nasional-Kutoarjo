<?php

namespace App\Filament\Resources\Gurus\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use App\Filament\Resources\Gurus\GuruResource;

class GuruForm
{
    public static function configure(Schema $schema): Schema
    {
        $rules = GuruResource::getValidationRules();

        return $schema
            ->components([
                TextInput::make('nama')
                    ->rules($rules['nama'] ?? [])
                    ->label('Nama Guru')
                    ->required()
                    ->maxLength(100),
                TextInput::make('jabatan')
                    ->rules($rules['jabatan'] ?? [])
                    ->label('Jabatan')
                    ->required()
                    ->maxLength(100),
                Select::make('jenjang')
                    ->options(['TK' => 'TK', 'SD' => 'SD'])
                    ->rules($rules['jenjang'] ?? []),
                Textarea::make('moto')
                    ->rules($rules['moto'] ?? [])
                    ->label('Moto')
                    ->columnSpanFull(),
                FileUpload::make('foto')
                    ->label('Foto Profil Guru')
                    ->image()
                    ->disk('public')
                    ->imageEditor()
                    ->directory('guru-fotos')
                    ->maxFiles(1)
                    ->required(),
            ]);
    }
}
