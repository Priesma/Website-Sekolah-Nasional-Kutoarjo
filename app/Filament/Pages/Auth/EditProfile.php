<?php

namespace App\Filament\Pages\Auth;

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Auth\Pages\EditProfile as BaseEditProfile;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class EditProfile extends BaseEditProfile
{
    public function defaultForm(Schema $schema): Schema
    {
        return $schema
            ->inlineLabel(! static::isSimple())
            ->model($this->getUser())
            ->operation('edit')
            ->statePath('data');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Akun')
                    ->description('Ubah detail profil dan login anda.')
                    ->schema([
                        $this->getNameFormComponent(),

                        TextInput::make('username')
                            ->label('Username')
                            ->required()
                            ->minLength(4)
                            ->regex('/^[a-zA-Z0-9._-]+$/')
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),

                        $this->getEmailFormComponent(),
                    ]),

                Section::make('Ganti Password')
                    ->description('Isi hanya jika ingin mengubah password.')
                    ->collapsed()
                    ->schema([
                        TextInput::make('password')
                            ->label('Password Baru')
                            ->password()
                            ->revealable()
                            // Aturan keamanan eksplisit: minimal 8, harus mengandung huruf dan angka
                            ->rule(Password::min(8)->letters()->numbers())
                            ->autocomplete('new-password')
                            ->dehydrated(fn ($state): bool => filled($state))
                            ->same('passwordConfirmation'),

                        TextInput::make('passwordConfirmation')
                            ->label('Konfirmasi Password Baru')
                            ->password()
                            ->revealable()
                            ->dehydrated(false),
                    ]),

                Section::make('Konfirmasi Perubahan')
                    ->description('Anda WAJIB memasukkan password saat ini untuk menyimpan perubahan apapun.')
                    ->schema([
                        TextInput::make('current_password')
                            ->label('Password Saat Ini')
                            ->password()
                            ->revealable()
                            ->required()
                            ->currentPassword()
                            ->dehydrated(false),
                    ]),
                ]);
    }

    public function save(): void
    {
        try {
            $this->validate();
            
            $data = $this->form->getState();
            $user = $this->getUser();

            // 1. Siapkan data update dasar
            $updateData = [
                'name' => $data['name'],
                'email' => $data['email'],
                'username' => $data['username'],
            ];

            // 2. Cek apakah password baru diisi (Menggunakan pengecekan aman)
            // Kita cek apakah key ada DAN isinya tidak kosong
            $passwordFilled = isset($data['password']) && filled($data['password']);

            if ($passwordFilled) {
                $updateData['password'] = Hash::make($data['password']);
            }

            // 3. Update Database
            $user->update($updateData);

            // 4. Logika Logout
            $credentialsChanged = 
                $user->wasChanged('username') || 
                $user->wasChanged('email') || 
                $passwordFilled; // Gunakan variabel aman tadi

            if ($credentialsChanged) {
                Notification::make()
                    ->success()
                    ->title('Kredensial Berubah')
                    ->body('Silakan login kembali dengan data baru.')
                    ->send();

                Auth::guard('admin')->logout();
                session()->invalidate();
                session()->regenerateToken();
                $this->redirect(route('filament.admin.auth.login'));
            } else {
                Notification::make()
                    ->success()
                    ->title('Profil berhasil diperbarui')
                    ->send();
            }

        } catch (\Exception $e) {
            Notification::make()
                ->danger()
                ->title('Gagal menyimpan')
                ->body($e->getMessage())
                ->send();
        }
    }
}
