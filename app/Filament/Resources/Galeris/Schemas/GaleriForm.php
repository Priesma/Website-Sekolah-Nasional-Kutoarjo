<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use App\Filament\Resources\Galeris\GaleriResource;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        $rules = GaleriResource::getValidationRules();

        return $schema
            ->components([
                TextInput::make('judul')
                    ->rules($rules['judul'] ?? [])
                    ->label('Judul Kegiatan/Foto')
                    ->maxLength(200)
                    ->required(),
                Select::make('kategori')
                    ->options([
                        'kegiatan' => 'Kegiatan',
                        'gambar-utama' => 'Gambar Utama',
                        'foto-jadul' => 'Foto Jadul',
                        'random' => 'Random',
                    ])
                    ->label('Kategori Galeri')
                    ->rules($rules['kategori'] ?? [])
                    ->required()
                    ->reactive(),
                FileUpload::make('foto_url')
                    ->label('File Foto')
                    ->disk('public')
                    ->directory(fn ($get) => 'galeri/' . Str::slug($get('kategori') ?? 'lainnya'))
                    ->image()
                    ->maxFiles(1)
                    ->required(),
            ]);
    }
}
