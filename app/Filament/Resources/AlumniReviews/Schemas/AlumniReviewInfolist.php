<?php

namespace App\Filament\Resources\AlumniReviews\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Schema;

class AlumniReviewInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Image-first profile style
                ImageEntry::make('foto')
                    ->label('Foto Alumni')
                    ->disk('public')
                    ->circular()
                    ->size(160)
                    ->columnSpanFull(),

                TextEntry::make('nama_alumni')
                    ->label('Nama Alumni')
                    ->columnSpanFull(),

                TextEntry::make('pekerjaan')
                    ->label('Pekerjaan')
                    ->placeholder('-'),

                TextEntry::make('tahun_lulus')
                    ->label('Tahun Lulus')
                    ->placeholder('-'),

                TextEntry::make('kesan')
                    ->label('Kesan & Pesan')
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
