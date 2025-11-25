<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Guru;
use App\Models\Staf;
use App\Models\Galeri;
use App\Models\AlumniReview;

class StatsOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Guru', Guru::count())
                ->description('Jumlah total guru')
                ->icon('heroicon-o-user-group')
                ->color('primary'),
            Stat::make('Total Staf', Staf::count())
                ->description('Jumlah total staf')
                ->icon('heroicon-o-identification')
                ->color('info'),
            Stat::make('Total Galeri', Galeri::count())
                ->description('Jumlah total gambar')
                ->icon('heroicon-o-photo')
                ->color('success'),
            Stat::make('Total Testimoni', AlumniReview::count())
                ->description('Jumlah testimoni alumni')
                ->icon('heroicon-o-chat-bubble-bottom-center-text')
                ->color('warning'),
        ];
    }
}
