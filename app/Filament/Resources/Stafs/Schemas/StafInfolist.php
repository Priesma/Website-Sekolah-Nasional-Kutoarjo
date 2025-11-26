<?php

namespace App\Filament\Resources\Stafs\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Schema;

class StafInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Image first for profile-style view
                ImageEntry::make('foto')
                    ->label('Foto Staf')
                    ->disk('public')
                    ->circular()
                    ->size(160)
                    ->columnSpanFull(),

                TextEntry::make('nama')
                    ->label('Nama Staf')
                    ->columnSpanFull(),

                TextEntry::make('jabatan')
                    ->label('Jabatan')
                    ->placeholder('-'),

                // TextEntry::make('departemen')
                //     ->label('Departemen')
                //     ->placeholder('-'),

                TextEntry::make('moto')
                    ->label('Moto')
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
