<?php

namespace App\Filament\Pages\Auth;

use Filament\Schemas\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Auth\Pages\Login as BaseLogin;
use Illuminate\Validation\ValidationException;

class AdminLogin extends BaseLogin
{
    /**
     * Override Form Schema
     * Kita mengganti field 'email' dengan 'username' secara eksplisit.
     */
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Input Username (Pengganti Email)
                TextInput::make('username')
                    ->label('Username')
                    ->required()
                    ->autocomplete()
                    ->autofocus()
                    // Aturan: Minimal 4 karakter, hanya huruf/angka/dash/underscore
                    ->minLength(4)
                    ->regex('/^[a-zA-Z0-9._-]+$/')
                    ->validationAttribute('Username')
                    ->extraInputAttributes(['tabindex' => 1]),

                // Input Password (Bawaan)
                $this->getPasswordFormComponent(),

                // Checkbox Remember Me (Bawaan)
                // $this->getRememberFormComponent(),
            ])
            ->statePath('data');
    }

    /**
     * Override Logika Kredensial
     * Memberi tahu Laravel untuk mencocokkan kolom 'username' di database.
     */
    protected function getCredentialsFromFormData(array $data): array
    {
        return [
            'username' => $data['username'],
            'password' => $data['password'],
        ];
    }

    /**
     * (Opsional) Override pesan error jika login gagal
     */
    protected function throwFailureValidationException(): never
    {
        throw ValidationException::withMessages([
            'data.username' => __('filament-panels::auth/pages/login.messages.failed'),
        ]);
    }
}
