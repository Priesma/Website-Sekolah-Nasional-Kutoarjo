<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Galeri;

class RecentGalleriesWidget extends BaseWidget
{
    protected static ?int $sort = 2; // Tampilkan di bawah kartu statistik
    
    protected int | string | array $columnSpan = 'full'; // Agar memenuhi lebar

    protected static ?string $heading = 'Galeri Terbaru'; // Judul Widget

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Galeri::query()->latest()->limit(5) // Ambil 5 terbaru
            )
            ->paginated(false) // Hapus pagination agar tampilan widget bersih
            ->columns([
                Tables\Columns\ImageColumn::make('foto_url')
                    ->label('Gambar')
                    ->disk('public')
                    ->size(100) 
                    ->width(50)
                    ->square(),

                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul Kegiatan')
                    ->weight('bold')
                    ->sortable(),

                Tables\Columns\TextColumn::make('kategori')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'kegiatan' => 'success',
                        'gambar-utama' => 'warning',
                        'foto-jadul' => 'gray',
                        'random' => 'info',
                        default => 'primary',
                    }),

                Tables\Columns\TextColumn::make('admin.name')
                    ->label('Diupload oleh')
                    ->color('gray')
                    ->description(fn (Galeri $record): string => $record->created_at->diffForHumans())
                    ->sortable(),
            ]);
            // Actions dihapus total untuk menghindari error class not found
    }
}
