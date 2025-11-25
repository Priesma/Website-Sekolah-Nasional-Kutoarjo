<?php

namespace App\Filament\Resources\Kontaks\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class KontakInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('alamat')
                    ->label('Alamat Sekolah')
                    ->columnSpanFull(),
                TextEntry::make('email')
                    ->label('Email Resmi'),
                TextEntry::make('telepon')
                    ->label('Telepon Sekolah'),
                // Link YouTube
                \Filament\Infolists\Components\TextEntry::make('link_yt')
                    ->label('YouTube')                    
                    ->url(fn ($state) => $state)
                    ->openUrlInNewTab(),

                // Link Instagram
                \Filament\Infolists\Components\TextEntry::make('link_ig')
                    ->label('Instagram')                
                    ->url(fn ($state) => $state)
                    ->openUrlInNewTab(),

                // Link Facebook
                \Filament\Infolists\Components\TextEntry::make('link_fb')
                    ->label('Facebook')               
                    ->url(fn ($state) => $state)
                    ->openUrlInNewTab(),
                TextEntry::make('embed_google_maps')
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
