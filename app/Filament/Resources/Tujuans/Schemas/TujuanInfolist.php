<?php

namespace App\Filament\Resources\Tujuans\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TujuanInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Konten Utama
                TextEntry::make('tujuan')
                    ->prose()
                    ->markdown()
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
