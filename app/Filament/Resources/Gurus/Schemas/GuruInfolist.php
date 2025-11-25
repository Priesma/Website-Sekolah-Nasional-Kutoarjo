<?php

namespace App\Filament\Resources\Gurus\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Schema;

class GuruInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Photo (large) at top
                ImageEntry::make('foto')
                    ->label('Foto')
                    ->disk('public')
                    ->circular()
                    ->size(200)
                    ->columnSpanFull(),

                // Primary identity
                TextEntry::make('nama')
                    ->label('Nama Guru')
                    ->columnSpanFull(),

                TextEntry::make('jabatan')
                    ->label('Jabatan')
                    ->badge(),

                // // Details
                // TextEntry::make('nip')
                //     ->label('NIP')
                //     ->placeholder('-'),

                TextEntry::make('created_at')
                    ->label('Terdaftar Sejak')
                    ->dateTime()
                    ->placeholder('-'),

                TextEntry::make('moto')
                    ->label('Moto / Deskripsi')
                    ->columnSpanFull(),

                // Data Sistem (standar)
                \Filament\Infolists\Components\TextEntry::make('admin.name')
                    ->label('Ditambahkan Oleh')
                    ->icon('heroicon-m-user')
                    ->placeholder('-'),

                \Filament\Infolists\Components\TextEntry::make('created_at')
                    ->label('Ditambahkan Sejak')
                    ->dateTime('d M Y, H:i')
                    ->icon('heroicon-m-calendar')
                    ->placeholder('-'),

                \Filament\Infolists\Components\TextEntry::make('updated_at')
                    ->label('Terakhir Diupdate')
                    ->since()
                    ->icon('heroicon-m-clock')
                    ->placeholder('-'),
            ]);
    }
}
