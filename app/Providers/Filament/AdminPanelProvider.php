<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use App\Filament\Pages\Auth\AdminLogin;
use App\Filament\Pages\Auth\EditProfile;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin') // URL panel: http://domain.com/admin
            ->login(AdminLogin::class) // Menggunakan halaman login kustom (username)
            ->profile(EditProfile::class) // Menggunakan halaman profil kustom (menambahkan username)
            ->globalSearch(false)
            // Konfigurasi Autentikasi Kustom
            ->authGuard('admin') // PENTING: Gunakan auth guard 'admin' Anda
            ->authPasswordBroker('admins') // PENTING: Sesuaikan dengan 'passwords' di auth.php
            
            ->colors([
                'primary' => Color::Teal,
            ])
            ->font('Poppins') // Font modern
            ->spa() // Enable SPA-like instant navigation
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                \Filament\Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                \App\Filament\Widgets\StatsOverviewWidget::class,
                \App\Filament\Widgets\RecentGalleriesWidget::class,
            ])
            ->brandName('Admin Website TK/SD Nasional Kutoarjo')
            ->sidebarCollapsibleOnDesktop() // Sidebar bisa dilipat di desktop
            ->brandLogoHeight('3rem') // Mengatur tinggi logo agar proporsional
            // ->brandLogo(asset('images/logo.png')) // Uncomment jika ingin menambahkan logo custom
            ->middleware([
                \Illuminate\Cookie\Middleware\EncryptCookies::class,
                \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
                \Illuminate\Session\Middleware\StartSession::class,
                \Illuminate\View\Middleware\ShareErrorsFromSession::class,
                \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class,
                \Illuminate\Routing\Middleware\SubstituteBindings::class,
            ])
            ->authMiddleware([
                // Middleware autentikasi Filament
                \Filament\Http\Middleware\Authenticate::class,
            ]);
    }
}
