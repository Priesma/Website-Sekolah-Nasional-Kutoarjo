<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    /**
     * Memberi tahu Eloquent untuk menggunakan tabel 'admin' (singular)
     * alih-alih 'admins' (plural) sesuai konvensi default.
     *
     * Tanpa ini, Eloquent akan mencoba menggunakan tabel `admins` dan
     * menghasilkan error SQLSTATE[42S02] jika tabel tersebut tidak ada.
     *
     * @var string
     */
    protected $table = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username', // <-- allow mass-assignment for username so edits persist
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Metode ini WAJIB untuk FilamentUser.
     * Memberi tahu Filament panel mana yang bisa diakses oleh Admin.
     */
    public function canAccessPanel(Panel $panel): bool
    {
        // Izinkan semua admin yang terautentikasi untuk mengakses panel.
        // Anda bisa menambahkan logika di sini, misalnya:
        // return str_ends_with($this->email, '@sekolah.com') && $this->hasVerifiedEmail();
        return true;
    }
}
