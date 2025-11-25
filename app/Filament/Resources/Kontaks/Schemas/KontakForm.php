<?php

namespace App\Filament\Resources\Kontaks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class KontakForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('alamat')
                    ->label('Alamat Sekolah')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('email')
                    ->label('Email Resmi')
                    ->email()
                    ->required(),
                TextInput::make('telepon')
                    ->label('Telepon Sekolah')
                    ->tel()
                    ->required(),
                TextInput::make('link_yt')
                    ->label('YouTube')
                    ->url()
                    ->nullable(),
                TextInput::make('link_ig')
                    ->label('Instagram')
                    ->url()
                    ->nullable(),
                TextInput::make('link_fb')
                    ->label('Facebook')
                    ->url()
                    ->nullable(),
                Textarea::make('embed_google_maps')
                    ->columnSpanFull(),
                // admin_id hidden and auto-filled
            ]);
    }
}
