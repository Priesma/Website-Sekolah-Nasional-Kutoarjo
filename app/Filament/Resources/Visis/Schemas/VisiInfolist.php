<?php

namespace App\Filament\Resources\Visis\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class VisiInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('isi') // <-- show the text field explicitly
                        ->label('Isi Visi')
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
