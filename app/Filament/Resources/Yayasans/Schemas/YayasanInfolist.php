<?php

namespace App\Filament\Resources\Yayasans\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Schema;

class YayasanInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('gambar')
                    ->label('Foto Yayasan')
                    ->disk('public')
                    ->columnSpanFull(),

                TextEntry::make('nama')
                    ->label('Nama Yayasan')
                    ->columnSpanFull(),

                TextEntry::make('deskripsi')
                    ->label('Deskripsi')
                    ->placeholder('-')
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
