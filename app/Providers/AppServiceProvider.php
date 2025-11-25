<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Tables\Table; // <-- Import Kelas Table Filament

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Konfigurasi Global untuk Semua Tabel Filament
        Table::configureUsing(function (Table $table): void {
            $table
                ->striped() // Mengaktifkan warna selang-seling (Zebra)
                ->defaultPaginationPageOption(10); // (Opsional) Set default pagination ke 10
        });
    }
}
