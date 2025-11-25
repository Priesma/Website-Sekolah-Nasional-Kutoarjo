<?php

namespace App\Filament\Resources\AlumniReviews\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class AlumniReviewForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_alumni')
                    ->label('Nama Alumni')
                    ->required(),
                TextInput::make('tahun_lulus')
                    ->label('Tahun Lulus')
                    ->required()
                    ->numeric(),
                TextInput::make('pekerjaan')
                    ->label('Pekerjaan Saat Ini'),
                Textarea::make('kesan')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('foto')
                    ->label('Foto Alumni')
                    ->image()
                    ->disk('public')
                    ->directory('alumni-photos')
                    ->maxFiles(1)
                    ->required(),
                // admin_id hidden and auto-filled
            ]);
    }
}
