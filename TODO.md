# [IN-PROGRESS] Fix Moto Not Saving

Memperbaiki kolom database dan model agar input Moto tersimpan.

**Tugas:**
- [ ] DB: Rename `deskripsi` -> `moto` di tabel `guru` dan `staf`.
- [ ] MODEL: Update `$fillable` di `Guru.php` dan `Staf.php`.
- [ ] CMD: `php artisan migrate`.
- [ ] CMD: `php artisan optimize:clear`.

# [IN-PROGRESS] Add Show API Endpoints

Menambahkan endpoint detail (show by ID) untuk semua resource publik.

**Tugas:**
- [ ] ROUTE: Tambahkan rute `/{id}` di `api.php`.
- [ ] CTRL: Tambahkan method `show()` di `PublicGuruController`.
- [ ] CTRL: Tambahkan method `show()` di `PublicStafController`.
- [ ] CTRL: Tambahkan method `show()` di `PublicFasilitasController`.
- [ ] CTRL: Tambahkan method `show()` di `PublicMitraController`.
- [ ] CTRL: Tambahkan method `show()` di `PublicAlumniReviewController`.
- [ ] CTRL: Tambahkan method `show()` di `PublicYayasanController`.
- [ ] CMD: `php artisan optimize:clear`.

# [IN-PROGRESS] Security Hardening: Auth Validation

Menerapkan standar keamanan pada username dan password untuk area admin.

**Tugas:**
- [ ] LOGIN: Validasi username `alpha_dash` di `AdminLogin`.
- [ ] ADMIN RESOURCE: Password rules (min:8, letters, numbers) di `AdminResource`.
- [ ] PROFILE: Password rules (min:8, letters, numbers) di `EditProfile`.
- [ ] CMD: `php artisan optimize:clear`.

# [IN-PROGRESS] UI Polish: Sidebar Icons

Menambahkan ikon navigasi spesifik untuk sidebar yang lebih intuitif.

**Tugas:**
- [ ] ICON: Update Galeri -> `heroicon-o-photo`.
- [ ] ICON: Update Guru -> `heroicon-o-academic-cap`.
- [ ] ICON: Update Staf -> `heroicon-o-identification`.
- [ ] ICON: Update Fasilitas -> `heroicon-o-building-office-2`.
- [ ] ICON: Update AlumniReview -> `heroicon-o-chat-bubble-bottom-center-text`.
- [ ] ICON: Update Tujuan -> `heroicon-o-flag`.
- [ ] ICON: Update Visi -> `heroicon-o-eye`.
- [ ] ICON: Update Misi -> `heroicon-o-rocket-launch`.
- [ ] ICON: Update Yayasan -> `heroicon-o-building-library`.
- [ ] ICON: Update Mitra -> `heroicon-o-briefcase`.
- [ ] ICON: Update Kontak -> `heroicon-o-phone`.
- [ ] CMD: `php artisan optimize:clear`.

# [IN-PROGRESS] Fix Navigation Icon Type Hint

Memperbaiki error "Property type mismatch" pada `$navigationIcon` di Resource Filament.

**Tugas:**
- [ ] REFACTOR: Update tipe `$navigationIcon` di semua Resource menjadi `string | \BackedEnum | null`.
- [ ] CMD: `php artisan optimize:clear`.

# [IN-PROGRESS] UI/UX Upgrade: Modern Look

Meningkatkan estetika admin Filament: font modern, warna utama baru, dan navigasi SPA.

**Tugas:**
- [ ] CONFIG: Set Font ke 'Poppins'.
- [ ] CONFIG: Set Primary Color ke 'Teal'.
- [ ] CONFIG: Enable `->spa()`.
- [ ] CMD: `php artisan optimize:clear`.

# [IN-PROGRESS] UI Polish: Sidebar, Logo, & Filters

Finalisasi UX Admin.

**Tugas:**
- [ ] CONFIG: Enable `sidebarCollapsibleOnDesktop`.
- [ ] CONFIG: Setup `brandLogo` styling.
- [ ] FEATURE: Tambah Filter Kategori di `GalerisTable`.
- [ ] FEATURE: Tambah Filter Jabatan di `GurusTable`.
- [ ] CMD: `php artisan optimize:clear`.

# [IN-PROGRESS] UI Polish: Guru Profile Card

Mengubah tampilan View Guru menjadi layout Split yang modern (kartu profil).

**Tugas:**
- [ ] REFACTOR: Implementasi `Split` & `Section` di `GuruInfolist`.
- [ ] CMD: `php artisan optimize:clear`.

# [IN-PROGRESS] Global UI Polish: Uniform View Design

Menyeragamkan desain halaman View (Infolist) ke gaya Split/Section modern.

**Tugas:**
- [ ] REFACTOR: `StafInfolist` (Split).
- [ ] REFACTOR: `AlumniReviewInfolist` (Split).
- [ ] REFACTOR: `GaleriInfolist` (Split).
- [ ] REFACTOR: `FasilitasInfolist`, `MitraInfolist`, `YayasanInfolist` (Split).
- [ ] REFACTOR: `Tujuan`, `Visi`, `Misi`, `Kontak` (Section).
- [ ] CMD: `php artisan optimize:clear`.

# [IN-PROGRESS] Final UI Polish & Label Fix

Memperbaiki label navigasi (Bahasa Indonesia) dan memperjelas label form/tabel.

**Tugas:**
- [ ] LABEL: Set `$modelLabel` = 'Testimoni Alumni' di `AlumniReviewResource`.
- [ ] LABEL: Set `$pluralModelLabel` = 'Testimoni Alumni' di `AlumniReviewResource`.
- [ ] LABEL: Set `$pluralModelLabel` = 'Visi' di `VisiResource`.
- [ ] LABEL: Set `$pluralModelLabel` = 'Misi' di `MisiResource`.
- [ ] UI: Update Label & Required untuk Guru, Staf, Alumni, Fasilitas, Mitra, Galeri, Yayasan.
- [ ] UI: Update Label & Required untuk Kontak, Visi, Misi, Tujuan.
- [ ] CMD: `php artisan optimize:clear`.

# [IN-PROGRESS] Fix Image View (Infolist)

Mengganti TextEntry dengan ImageEntry agar gambar tampil di halaman detail.

**Tugas:**
- [ ] REFACTOR: Update `GaleriInfolist` (gunakan ImageEntry).
- [ ] REFACTOR: Update `GuruInfolist` & `StafInfolist`.
- [ ] REFACTOR: Update `FasilitasInfolist`, `MitraInfolist`, `AlumniReviewInfolist`.
- [ ] CMD: `php artisan optimize:clear`.

# [IN-PROGRESS] Switch Login to Username (Safe Mode)

Mengganti kredensial login admin ke username dengan metode override yang aman.

**Tugas:**
- [ ] Buat class `AdminLogin` di `app/Filament/Pages/Auth`.
- [ ] Override `form()` dan `getCredentialsFromFormData()` di `AdminLogin`.
- [ ] Daftarkan `AdminLogin` di `AdminPanelProvider`.
- [ ] CMD: `php artisan optimize:clear`.

# [IN-PROGRESS] Fix TypeError & Image UI
## [IN-PROGRESS] Fix UI Kontak View

Memperbarui halaman View Kontak untuk menampilkan detail link sosial media baru.

**Tugas:**
- [ ] UPDATE: Hapus `link_media_sosial` dari `KontakInfolist`.
- [ ] UPDATE: Tambahkan `link_yt`, `link_ig`, `link_fb` ke `KontakInfolist`.
- [ ] CMD: `php artisan optimize:clear`.


Memperbaiki error upload di Galeri dan mengaktifkan preview gambar di semua tabel admin.

**Tugas:**
- [ ] FIX: Hapus type hint `Get` di `app/Filament/Resources/Galeris/Schemas/GaleriForm.php`.
- [ ] UI: Ubah `TextColumn` -> `ImageColumn` di `GalerisTable`.
- [ ] UI: Ubah `TextColumn` -> `ImageColumn` di `GurusTable`.
- [ ] UI: Ubah `TextColumn` -> `ImageColumn` di `StafsTable`.
- [ ] UI: Ubah `TextColumn` -> `ImageColumn` di `FasilitasTable`.
- [ ] UI: Ubah `TextColumn` -> `ImageColumn` di `MitrasTable`.
- [ ] UI: Ubah `TextColumn` -> `ImageColumn` di `AlumniReviewsTable`.
- [ ] CMD: `php artisan optimize:clear`.

# [IN-PROGRESS] Fix Visi/Misi & Upgrade Dashboard UI

Memperbaiki tampilan data Visi/Misi yang hilang dan mempercantik Dashboard.

- **Tugas:**
- [ ] FIX: Update `VisisTable` & `VisiInfolist` gunakan kolom 'isi'.
- [ ] FIX: Update `MisisTable` & `MisiInfolist` gunakan kolom 'isi'.
- [ ] DASHBOARD: Update `StatsOverviewWidget` dengan ikon dan warna.
- [ ] DASHBOARD: Buat `GaleriChartWidget` (Pie/Doughnut Chart Kategori).
- [ ] DASHBOARD: Register widget baru di `app/Providers/Filament/AdminPanelProvider.php`.
- [ ] CMD: `php artisan optimize:clear`.

# [IN-PROGRESS] Fase 1 & 2: Fondasi & Struktur Database

Membangun ulang proyek dengan struktur database yang bersih dan efisien.

## [IN-PROGRESS] Fase 4 & 5: Finalisasi UI & Cleanup

Menyelesaikan dashboard, tampilan admin, dan membersihkan kode lama.

**Tugas:**
- [ ] UI: Ganti sisa `admin_id` di tabel menjadi `admin.name`.
- [ ] DASHBOARD: Pastikan Branding & Widgets terimplementasi.
- [ ] CLEANUP: Hapus Controller API admin lama (sisakan Public).
- [ ] CLEANUP: Hapus `app/Http/Controllers/Auth/AdminAuthController.php`.
- [ ] CLEANUP: Bersihkan `routes/api.php` sehingga hanya menyisakan rute publik.
- [ ] CMD: `php artisan optimize:clear`.


# [IN-PROGRESS] UI Consistency: Tujuan View

Menyamakan desain View `Tujuan` dengan `Visi`/`Misi` dan menambahkan label Data Sistem standar.

**Tugas:**
- [x] REFACTOR: Create `TujuanInfolist` and wire to `TujuanResource`.
- [ ] CMD: `php artisan optimize:clear`.


**Tugas:**
- [ ] Config: Set `.env` APP_URL=http://127.0.0.1:8000 dan FILESYSTEM_DISK=public.
- [ ] Config: Jalankan `php artisan storage:link`.
- [ ] Delete: Hapus file (Model, Controller, Migrasi, Seeder) untuk Hero, Sejarah, Kegiatan.
- [ ] Refactor DB: Edit migrasi `Galeri` (judul, kategori).
- [ ] Refactor DB: Rename & Edit migrasi `ProfilSekolah` menjadi `Tujuan`.
- [ ] Refactor DB: Edit migrasi `Staf` (hapus departemen).
- [ ] Refactor DB: Edit migrasi `Kontak` (detail sosmed).
- [ ] Refactor DB: Edit migrasi `AlumniReview` (tambah pekerjaan).
- [ ] Refactor Code: Update Model & Factory sesuai perubahan DB.
- [ ] Refactor Code: Tambahkan relasi `admin()` ke semua Model.
- [ ] Cleanup: Update `DatabaseSeeder.php`.
- [ ] Final: Jalankan `composer dump-autoload` dan `php artisan migrate:fresh --seed`.

TAHAP 2: Konfigurasi Environment
Edit .env:

Ubah APP_URL menjadi http://127.0.0.1:8000

Ubah FILESYSTEM_DISK menjadi public

Storage Link: Jalankan php artisan storage:link.

TAHAP 3: Pembersihan Fitur Lama
Hapus file-file berikut (jika ada):

Group: Hero `app/Models/Hero.php`, `database/migrations/*create_hero_table.php` (jika ada), `database/seeders/HeroSeeder.php`.

Group: Sejarah `app/Models/Sejarah.php`, `app/Http/Controllers/Api/SejarahController.php`, `database/migrations/2024_10_01_000002_create_sejarah_table.php`, `database/seeders/SejarahSeeder.php`.

Group: Kegiatan `app/Models/Kegiatan.php`, `app/Http/Controllers/Api/KegiatanController.php`, `database/migrations/2024_10_01_000006_create_kegiatan_table.php`, `database/seeders/KegiatanSeeder.php`, `database/factories/KegiatanFactory.php`.

TAHAP 4: Refaktor Database (Edit Migrasi Langsung)
1. Galeri (`2024_10_01_000005_create_galeri_table.php`) Ubah skema up() menjadi:

```
Schema::create('galeri', function (Blueprint $table) {
  $table->id();
  $table->string('judul'); // Ganti 'deskripsi' jadi 'judul'
  $table->string('kategori'); // Tambah ini
  $table->string('foto_url');
  $table->foreignId('admin_id')->constrained('admin')->onDelete('cascade');
  $table->timestamps();
});
```
2. ProfilSekolah -> Tujuan (`2024_10_01_000001_create_profil_sekolah_table.php`)

Rename File: Ubah nama file menjadi ..._create_tujuan_table.php.

Edit Isi: Ubah nama tabel jadi tujuan dan kolom jadi tujuan (text).

```
Schema::create('tujuan', function (Blueprint $table) { // Ganti nama tabel
  $table->id();
  $table->text('tujuan'); // Hanya kolom ini + admin
  $table->foreignId('admin_id')->constrained('admin')->onDelete('cascade');
  $table->timestamps();
});
```
3. Staf (`2024_10_01_000004_create_staf_table.php`) Hapus kolom `$table->string('departemen');`.

4. Kontak (`2024_10_01_000010_create_kontak_table.php`) Hapus `link_media_sosial`. Tambahkan 3 kolom baru:

```
$table->string('link_yt')->nullable();
$table->string('link_ig')->nullable();
$table->string('link_fb')->nullable();
```
5. AlumniReview (`2024_10_01_000009_create_alumni_review_table.php`) Tambahkan kolom pekerjaan:

```
$table->string('pekerjaan')->nullable(); // Tambahkan ini
```
TAHAP 5: Refaktor Model & Factory
1. Model `Galeri.php` Update `$fillable`: `['judul', 'kategori', 'foto_url', 'admin_id']`.

2. Model `Tujuan.php` (Rename dari `ProfilSekolah.php`)

Rename File: `app/Models/ProfilSekolah.php` -> `app/Models/Tujuan.php`.

Edit Class: Ubah class jadi `Tujuan`, `$table = 'tujuan'`, `$fillable = ['tujuan', 'admin_id']`.

3. Model `Staf.php` Hapus 'departemen' dari `$fillable`.

4. Model `Kontak.php` Ganti 'link_media_sosial' dengan 'link_yt', 'link_ig', 'link_fb' di `$fillable`.

5. Model `AlumniReview.php` Tambahkan 'pekerjaan' ke `$fillable`.

6. Global: Tambahkan Relasi Admin Tambahkan method ini ke SEMUA Model di atas (Galeri, Tujuan, Staf, Kontak, AlumniReview, Fasilitas, Mitra, Yayasan, Visi, Misi):

```
public function admin() { return $this->belongsTo(Admin::class); }
```
7. Update Factories & Seeders

GaleriFactory: Generate judul dan kategori (pilih random dari `['kegiatan', 'gambar-utama', 'foto-jadul', 'random']`).

StafFactory: Hapus definisi departemen.

AlumniReviewFactory: Tambahkan definisi pekerjaan.

DatabaseSeeder.php:

Hapus panggilan ke `HeroSeeder`, `SejarahSeeder`, `KegiatanSeeder`.

Ganti `ProfilSekolahSeeder` dengan `TujuanSeeder` (Anda perlu rename file seeder dan class-nya juga: `database/seeders/ProfilSekolahSeeder.php` -> `TujuanSeeder.php` dan sesuaikan isinya untuk insert ke tabel tujuan).

TAHAP 6: Eksekusi Final
Jalankan `composer dump-autoload` (penting karena rename file).

Jalankan `php artisan migrate:fresh --seed`.


## [IN-PROGRESS] Fase 3: Implementasi UI Filament

Menyelaraskan UI Admin dengan database baru.

**Tugas:**
- [ ] Hapus Resource Filament lama: Hero, Sejarah, Kegiatan, ProfilSekolah.
- [ ] Generate `TujuanResource`.
- [ ] Update `GaleriResource`: Form (Kategori, Upload Dinamis), Table (ImageColumn disk public).
- [ ] Update `StafResource`: Hapus departemen.
- [ ] Update `KontakResource`: Ganti media sosial dengan YT, IG, FB.
- [ ] Update `AlumniReviewResource`: Tambah pekerjaan.
- [ ] Global UI Sweep: Pastikan semua ImageColumn pakai `disk('public')` dan tampilkan `admin.name` bukan ID.
- [ ] Jalankan `php artisan optimize:clear`.


Menerapkan serangkaian perbaikan berdasarkan temuan QA manual.

**Tugas:**
- [x] [FIX-SQL] Perbaiki `AlumniReview`: Atasi error `kesan doesn't have a default value`.
- [x] [FIX-SQL] Perbaiki `Guru`: Atasi error `Unknown column 'deskripsi'`.

### Log perubahan awal untuk SQL fixes (AlumniReview, Guru)

- BEFORE: `app/Http/Requests/AlumniReviewRequest.php` menggunakan key `komentar` sedangkan form/resource menggunakan `kesan`.
- ACTION (AlumniReview): Memperbarui rules/messages di `AlumniReviewRequest.php` dari `komentar` -> `kesan`. Juga menambahkan kolom `kesan` pada tabel resource agar terlihat di UI.
- AFTER: Request rules sekarang memakai `kesan`; tabel menampilkan `kesan`.

- BEFORE: `app/Filament/Resources/Gurus/Schemas/GuruForm.php` dan `app/Http/Requests/GuruRequest.php` masih menggunakan `deskripsi` sementara DB kolom sudah diganti menjadi `moto`.
- ACTION (Guru): Ganti field form `deskripsi` -> `moto` dan perbarui rules di `GuruRequest.php` menjadi `moto`.
- AFTER: Form dan request konsisten dengan skema DB (kolom `moto`).

### Specific file changes executed

- `app/Filament/Resources/Gurus/Schemas/GuruForm.php`
  - BEFORE: Textarea field `deskripsi` was present.
  - ACTION: Renamed field to `moto`, added label 'Moto', wired validation rules from `GuruResource::getValidationRules()` using key `moto`.
  - AFTER: Form uses `moto` textarea matching DB.

- `app/Http/Requests/GuruRequest.php`
  - BEFORE: Validation key `deskripsi` existed.
  - ACTION: Replaced with `moto` => 'nullable|string' and updated messages.
  - AFTER: Request validates `moto` instead of `deskripsi`.
- [ ] [FIX-VALIDATION] Perbaiki `Staf`: Ubah aturan validasi (jabatan nullable, departemen required).
- [ ] [FIX-UI-TABLE] Perbaiki `MisiResource`: Tampilkan kolom `deskripsi` di tabel.
- [ ] [FIX-UI-TABLE] Perbaiki `VisiResource`: Tampilkan kolom `deskripsi` di tabel.
 - [ ] [FIX-UI-TABLE] Perbaiki `MisisTable`: Tampilkan kolom `misi` (bukan deskripsi) dan tambahkan `admin_id`.
 - [ ] [FIX-UI-TABLE] Perbaiki `VisisTable`: Tampilkan kolom `visi` (bukan deskripsi) dan tambahkan `admin_id`.
- [ ] [FIX-UI-TABLE] Perbaiki `ProfilSekolahResource`: Tampilkan `tujuan` & `deskripsi` di tabel.
- [ ] [FIX-UI-TABLE] Perbaiki `YayasanResource`: Tampilkan `deskripsi` di tabel.
- [ ] [FIX-FORM] Hapus `tanggal` dari `KegiatanResource` (Form & Tabel).
- [ ] [MIGRATION] Buat migrasi baru untuk menghapus kolom `tanggal` dari tabel `kegiatan`.
- [ ] [GLOBAL-FORM] Ubah semua input `foto`/`gambar` dari `TextInput` menjadi `FileUpload` yang benar.
- [ ] [GLOBAL-FORM] Sembunyikan `admin_id` dari SEMUA formulir dan isi secara otomatis.
- [ ] [VERIFY] Jalankan migrasi dan bersihkan cache.

## [IN-PROGRESS] Perbaikan Storage Path & SQL AlumniReview

Memperbaiki dua bug kritis: mengarahkan file upload ke disk 'public' dan mengatasi error SQL 'kesan doesn't have a default value'.

**Tugas:**
- [ ] [FIX-STORAGE] Paksa semua FileUpload untuk menggunakan `disk('public')` di semua resource.
- [ ] [FIX-SQL] Perbaiki form `AlumniReview` untuk mengirimkan field `kesan`.
- [ ] [VERIFY] Pastikan `kesan` ada di `$fillable` Model `AlumniReview`.
- [ ] [CLEANUP] Bersihkan cache dan hapus folder `storage/app/private` yang salah.

### Eksekusi & file yang diubah (2025-11-10)

- ACTION: Menambahkan `->disk('public')` pada semua FileUpload di resource berikut:
  - `app/Filament/Resources/Gurus/Schemas/GuruForm.php`
  - `app/Filament/Resources/Galeris/Schemas/GaleriForm.php`
  - `app/Filament/Resources/Yayasans/Schemas/YayasanForm.php`
  - `app/Filament/Resources/Sejarahs/Schemas/SejarahForm.php`
  - `app/Filament/Resources/Stafs/Schemas/StafForm.php`
  - `app/Filament/Resources/Fasilitas/Schemas/FasilitasForm.php`
  - `app/Filament/Resources/Mitras/Schemas/MitraForm.php`
  - `app/Filament/Resources/Kegiatans/Schemas/KegiatanForm.php`
  - `app/Filament/Resources/Heroes/Schemas/HeroForm.php`
  - `app/Filament/Resources/AlumniReviews/Schemas/AlumniReviewForm.php`

- ACTION: Perbaikan Model `AlumniReview` (mass assignment):
  - `app/Models/AlumniReview.php` — mengganti `komentar` -> `kesan` pada `$fillable`.

- ACTION: Clear cache dan restart server (optimize:clear; php artisan serve).

- ACTION: Hapus folder `storage/app/private` yang berisi file upload orphaned.

All changes logged here. Mark the checklist as completed when you verify manually.

---

# [IN-PROGRESS] Integrasi Laravel Filament 3

Memulai proses integrasi Laravel Filament 3 untuk menggantikan panel admin API kustom.

**Tugas:**
- [ ] Instalasi paket Filament
  
  > Attempted: `composer require filament/filament:"^3.2" -W`
  >
  > Result: FAILED — composer reported dependency conflicts preventing installation. See terminal output above. Likely cause: Filament 3.2 requires Illuminate (Laravel) 10.x while this project uses a different major version.
  
  > Next: Attempting Filament v5 (beta) install to find a version compatible with Laravel 12.
  > Planned command: `composer require filament/filament:"^5.0@beta" -W -vvv`

  > Attempt result: FAILED — composer could not resolve an installable set of packages for Filament v5 beta.
  > Key message: "Root composer.json requires filament/filament 5.0@beta (exact version match)... but it does not match the constraint."
  > Diagnostic notes: Composer resolution shows many Filament versions available (v3/v4/v5 betas), but transitive constraints prevented installation. Full composer output captured in terminal.
  > Next steps recommended: (1) try to relax the Filament version constraint (e.g., allow v4 stable or v3.3 series), (2) consider aligning Laravel version with Filament 3, or (3) continue integration work (model/provider changes and scaffold resources) while delaying package install.

  > Now: I'll attempt a combined version constraint to give Composer flexibility: `composer require filament/filament:"^4.0 || ^5.0@beta" -W -vvv`.
  > I will record the output and update this file with the result.
- [ ] Konfigurasi Autentikasi Admin (`Admin` model)
  - [x] [FIX] Atasi error `Table 'admins' doesn't exist` dengan menentukan nama tabel di `app/Models/Admin.php`.
  
  > Now: Modifying `app/Models/Admin.php` to implement `FilamentUser` and `app/Providers/Filament/AdminPanelProvider.php` to use the `admin` guard and custom panel settings. I will record the state before and after the edits.
  
  > Result: Completed — `app/Models/Admin.php`, `app/Providers/Filament/AdminPanelProvider.php`, and `config/auth.php` were updated to integrate Filament authentication and panel settings.
  
  - `app/Models/Admin.php` now implements `Filament\Models\Contracts\FilamentUser` and includes `canAccessPanel(Panel $panel): bool`.
  - `app/Providers/Filament/AdminPanelProvider.php` panel() was updated to use `->authGuard('admin')`, `->authPasswordBroker('admins')`, and `->profile()`.
  - `config/auth.php` was updated: `guards.admin.driver` set to `session`, and a `passwords.admins` entry was added.

  > Next: Run `php artisan migrate`/seed as needed and then create Filament Resources. Also run `php artisan storage:link` when ready.

- [x] Konfigurasi Autentikasi Admin (`Admin` model)
- [ ] Buat Filament Resources untuk semua model data
  
  > Now: Generating Filament Resources for all models (List/Create/Edit/View pages) using `php artisan make:filament-resource --generate` for each model. I will record results after the commands run.
  
  > Result: Completed — Filament Resources generated for: AlumniReview, Fasilitas, Galeri, Guru, Hero, Kegiatan, Kontak, Misi, Mitra, ProfilSekolah, Sejarah, Staf, Visi, Yayasan.
  
  - Next: Implement form(), table(), and getValidationRules() for each Resource. I implemented `GuruResource` and `GaleriResource` as templates to follow; remaining resources should follow the same pattern (reuse respective FormRequest classes for validation).

  - [x] Perbaiki syntax error pada `app/Filament/Resources/Galeris/GaleriResource.php`

    > Now: Replacing the broken `GaleriResource.php` (which contained duplicated/invalid PHP blocks) with the correct Filament v4 Schema-based Resource class so PHP can parse artisan commands again.

    > Result: Fixed — `GaleriResource.php` restored to the generated Schema-style resource (uses `Filament\\Schemas\\Schema`, `Tables\\Table`, and Pages/Schemas/Tables helpers). Confirmed file saved.

  ---

  ### Changes performed (scan + fixes + implementations)

  - Modified `app/Filament/Resources/Gurus/GuruResource.php`
    - Before: Resource existed but did not expose getValidationRules() to reuse FormRequest rules.
    - After: Added `getValidationRules()` returning `(new App\Http\Requests\GuruRequest())->rules()` so schema classes can reuse them.

  - Modified `app/Filament/Resources/Gurus/Schemas/GuruForm.php`
    - Before: Used `moto` field and ad-hoc `->required()` calls.
    - After: Now uses `GuruResource::getValidationRules()` to wire per-field rules, corrected field name `deskripsi`, set sensible maxLength and options for `jenjang`.

  - Modified `app/Filament/Resources/Galeris/GaleriResource.php`
    - Before: Resource lacked getValidationRules() (and earlier had been restored from a syntax error).
    - After: Added `getValidationRules()` returning `(new App\Http\Requests\GaleriRequest())->rules()`.

  - Modified `app/Filament/Resources/Galeris/Schemas/GaleriForm.php`
    - Before: Components used `->required()` inline and had no rule wiring.
    - After: Now uses `GaleriResource::getValidationRules()` to apply per-field rules and maxLength settings.

  For each change above I recorded a short before/after note here. If you want the exact pre-edit snapshots added as a separate section, I can append them.

  ---

  Note: To silence IDE/static-analysis warnings (Intelephense) about Filament symbols that are provided by vendor packages, I added lightweight non-runtime PHP stubs at `stubs/filament_stubs.php`. These stubs declare minimal classes (Heroicon, Table, Schema, TextInput, Select, Textarea, DatePicker, Color) so the editor no longer marks those types as "undefined". They do not affect runtime — the real implementations come from `vendor/filament/*`.

- [x] Buat Filament Resources untuk semua model data
- [ ] Implementasikan form dan tabel untuk setiap resource
- [ ] Manfaatkan ulang `FormRequest` yang ada untuk validasi
- [ ] Konfigurasi file upload (storage)
  
  > Now: Creating storage symlink via `php artisan storage:link` and verifying `FILESYSTEM_DISK=public` in `.env`.
- [ ] Tandai controller API admin lama sebagai `deprecated`
- [ ] Verifikasi dan pengujian

---

## [LOG] 2025-11-10 - Remove `tanggal` from `kegiatan` (form, table, migration)

# [IN-PROGRESS] Custom Edit Profile

Menambahkan field 'username' ke halaman profil admin.

**Tugas:**
- [ ] Buat file `app/Filament/Pages/Auth/EditProfile.php`.
- [ ] Override method `form()` untuk menambahkan `username`.
- [ ] Update `AdminPanelProvider.php` untuk menggunakan `->profile(EditProfile::class)`.
- [ ] CMD: `php artisan optimize:clear`.

# [IN-PROGRESS] Secure Edit Profile & Re-login

Memperbaiki update username, menambahkan verifikasi password lama, dan auto-logout setelah update.

**Tugas:**
- [ ] REFACTOR: Override `EditProfile.php` sepenuhnya.
- [ ] FORM: Tambahkan input `current_password` dengan validasi `current_password`.
- [ ] LOGIC: Update method `save()` untuk menangani update data user.
- [ ] LOGIC: Tambahkan `Auth::guard('admin')->logout()` setelah save.
- [ ] CMD: `php artisan optimize:clear`.

# [IN-PROGRESS] Fix Admin Profile (Persistence & Security)

Menggabungkan perbaikan fillable model dan pengetatan keamanan profil.

**Tugas:**
- [ ] MODEL: Tambahkan 'username' ke `$fillable` di `Admin.php`.
- [ ] REFACTOR: Tulis ulang `EditProfile.php` agar `current_password` wajib dan username tersimpan.
- [ ] CMD: `php artisan optimize:clear`.

# [IN-PROGRESS] Fix Undefined Password Key

Memperbaiki bug array key missing saat update profil tanpa ganti password.

**Tugas:**
- [ ] REFACTOR: Update method `save()` di `EditProfile.php` dengan pengecekan `isset()`.
- [ ] CMD: `php artisan optimize:clear`.

- BEFORE: `kegiatan` table contained a `tanggal` date column. Filament form and table were still referencing `tanggal` while QA requested removal.
- ACTIONS:
  - Removed `tanggal` from Filament form: `app/Filament/Resources/Kegiatans/Schemas/KegiatanForm.php` (left a comment noting removal).
  - Updated `app/Filament/Resources/Kegiatans/Tables/KegiatansTable.php` to no longer show `tanggal` in the table; it now shows `deskripsi` instead.
  - Created migration `database/migrations/2025_11_10_000000_remove_tanggal_from_kegiatan.php` which drops the `tanggal` column (if present) and removes its index. The down() recreates the `tanggal` column as nullable and re-adds the index.
- AFTER: Form and table are consistent (no `tanggal` field). Run `php artisan migrate` to apply the schema change; note that dropping the column is destructive — ensure backups if needed.

---

## [LOG] 2025-11-10 - Staf validation update

- BEFORE: `StafRequest` required `jabatan` and allowed `departemen` to be nullable. Filament form `StafForm` had `jabatan` required and `departemen` optional.
- ACTION: Updated `app/Http/Requests/StafRequest.php` to make `jabatan` nullable and `departemen` required. Updated `app/Filament/Resources/Stafs/Schemas/StafForm.php` to match: removed `->required()` from `jabatan` and added `->required()` to `departemen`.
- AFTER: Validation and form now agree: `jabatan` optional, `departemen` required.

---

## [LOG] 2025-11-10 - Migration executed & final sweeps

- ACTION: Executed migration `2025_11_10_000000_remove_tanggal_from_kegiatan` to drop `tanggal` column from `kegiatan`, then cleared caches using `php artisan optimize:clear`.
- MIGRATION OUTPUT: Migration ran successfully: `2025_11_10_000000_remove_tanggal_from_kegiatan ................................. DONE`.
- CACHE: `optimize:clear` completed and cleared config, cache, routes, views, filament, and other caches.

- ACTION: Performed final code-only sweeps:
  - Searched all `app/Filament/Resources/**/Schemas/*` files for any remaining `admin_id` form components (TextInput/TextEntry). Result: no remaining `admin_id` form inputs found (only informative comments and Infolist TextEntry occurrences remain).
  - Searched all Schema files for `TextInput` usages that represent image fields (e.g., `foto`, `gambar`, `logo`) to convert to `FileUpload`. Result: no remaining TextInput image fields found — prior conversions already completed.

- AFTER: Migration applied and codebase sweep completed. No further form-level `admin_id` fields or TextInput image fields remain. Manual QA recommended:
  1. Backup DB (if necessary), then verify that `kegiatan` rows are correct and that the `tanggal` column is removed.
  2. Log in to `/admin` and create/edit a `Galeri` and `Guru` to confirm file uploads and that `admin_id` is set automatically in DB rows.



# TODO: Laravel Migrations, Seeders, Factories for 11 Tables

## Migrations
- [x] Create migration for admin table (2024_10_01_000000_create_admin_table.php)
- [x] Create migration for profil_sekolah table (2024_10_01_000001_create_profil_sekolah_table.php)
- [x] Create migration for sejarah table (2024_10_01_000002_create_sejarah_table.php)
- [x] Create migration for guru table (2024_10_01_000003_create_guru_table.php)
- [x] Create migration for staf table (2024_10_01_000004_create_staf_table.php)
- [x] Create migration for galeri table (2024_10_01_000005_create_galeri_table.php)
- [x] Create migration for kegiatan table (2024_10_01_000006_create_kegiatan_table.php)
- [x] Create migration for fasilitas table (2024_10_01_000007_create_fasilitas_table.php)
- [x] Create migration for mitra table (2024_10_01_000008_create_mitra_table.php)
- [x] Create migration for alumni_review table (2024_10_01_000009_create_alumni_review_table.php)
- [x] Create migration for kontak table (2024_10_01_000010_create_kontak_table.php)

## Factories
- [x] Create GuruFactory.php
- [x] Create StafFactory.php
- [x] Create GaleriFactory.php
- [x] Create KegiatanFactory.php
- [x] Create MitraFactory.php
- [x] Create AlumniReviewFactory.php

## Seeders
- [x] Create AdminSeeder.php
- [x] Create ProfilSekolahSeeder.php
- [x] Create SejarahSeeder.php
- [x] Create GuruSeeder.php
- [x] Create StafSeeder.php
- [x] Create GaleriSeeder.php
- [x] Create KegiatanSeeder.php
- [x] Create FasilitasSeeder.php
- [x] Create MitraSeeder.php
- [x] Create AlumniReviewSeeder.php
- [x] Create KontakSeeder.php
- [x] Update DatabaseSeeder.php to call all seeders

## Output
- [x] Provide SQL DDL for all tables
- [x] Provide artisan commands
- [x] Provide seeder/factory examples
- [x] Provide validation notes

# TODO: Authentication System for Admin using Laravel Sanctum

## Installation & Configuration
- [x] Install Laravel Sanctum (already installed in composer.json)
- [x] Publish Sanctum service provider (config/sanctum.php exists)
- [x] Run migrations for personal_access_tokens (2025_10_16_005653_create_personal_access_tokens_table.php)
- [x] Configure Sanctum in config/sanctum.php (default settings)
- [x] Update bootstrap/app.php to load API routes

## Model & Database
- [x] Update Admin model with HasApiTokens trait and fillable/hidden attributes
- [x] Run AdminSeeder to create default admin account (username: admin, password: password)

## Authentication Components
- [x] Create AdminAuthController.php with login, logout, me methods
- [x] Create AdminLoginRequest.php for validation
- [x] Update routes/api.php with admin authentication routes

## Testing
- [x] Test POST /api/admin/login endpoint (successful login with token generation)
- [x] Test GET /api/admin/me endpoint (authenticated user data retrieval)
- [x] Test POST /api/admin/logout endpoint (token deletion)

## Optional Features
- [ ] Create EnsureAdminAuthenticated middleware (not implemented yet)
- [ ] Add middleware to Kernel.php (not implemented yet)

# TODO: CRUD API Endpoints for All Entities

## Models
- [x] Create ProfilSekolah.php model
- [x] Create Sejarah.php model
- [x] Create Guru.php model
- [x] Create Staf.php model
- [x] Create Galeri.php model
- [x] Create Kegiatan.php model
- [x] Create Fasilitas.php model
- [x] Create Mitra.php model
- [x] Create AlumniReview.php model
- [x] Create Kontak.php model

## Request Classes
- [x] Create ProfilSekolahRequest.php
- [x] Create SejarahRequest.php
- [x] Create GuruRequest.php
- [x] Create StafRequest.php
- [x] Create GaleriRequest.php
- [x] Create KegiatanRequest.php
- [x] Create FasilitasRequest.php
- [x] Create MitraRequest.php
- [x] Create AlumniReviewRequest.php
- [x] Create KontakRequest.php

## Controllers
- [x] Create ProfilSekolahController.php
- [x] Create SejarahController.php
- [x] Create GuruController.php
- [x] Create StafController.php
- [x] Create GaleriController.php
- [x] Create KegiatanController.php
- [x] Create FasilitasController.php
- [x] Create MitraController.php
- [x] Create AlumniReviewController.php
- [x] Create KontakController.php

## Routes
- [x] Update routes/api.php with CRUD routes for all entities using apiResource

## Testing
- [ ] Test all CRUD endpoints for each entity (index, show, store, update, destroy)
- [ ] Verify authentication middleware is applied
- [ ] Verify validation rules are working
- [ ] Verify admin_id is automatically set on create operations

# TODO: Public API Development for Website Sekolah Nasional

## 📅 Tanggal: 2025-01-03
### 🔧 Tahap: Backend Development
### 🧱 Modul: Public API (Read-Only)

#### 🎯 Tujuan
Menyediakan endpoint publik untuk menampilkan data sekolah tanpa autentikasi (khusus pengunjung website).

#### 📂 Struktur Baru

app/Http/Controllers/Api/Public/
├── PublicProfilSekolahController.php
├── PublicSejarahController.php
├── PublicGuruController.php
├── PublicStafController.php
├── PublicGaleriController.php
├── PublicKegiatanController.php
├── PublicFasilitasController.php
├── PublicMitraController.php
├── PublicAlumniReviewController.php
└── PublicKontakController.php

#### 🛣️ Route Tambahan
Semua route di bawah prefix `/api/public/`
- `/guru`, `/guru/{id}`
- `/staf`, `/staf/{id}`
- `/galeri`, `/galeri/{id}`
- `/kegiatan`, `/kegiatan/{id}`
- `/fasilitas`, `/fasilitas/{id}`
- `/mitra`, `/mitra/{id}`
- `/alumni-review`, `/alumni-review/{id}`
- `/profil-sekolah`, `/sejarah`, `/kontak`

#### 🔒 Middleware
Tidak menggunakan `auth:sanctum`, hanya endpoint `GET` (read-only).

#### 🧪 Testing
- Endpoint diuji di Postman ✅
- Semua response menggunakan struktur:
  ```json
  {
    "success": true,
    "message": "Pesan sukses",
    "data": [...]
  }

#### 📈 Status
✅ Public API Created and Tested
✅ Route Registered
✅ Dokumentasi Ditambahkan ke TODO.md
✅ Siap untuk integrasi ke frontend
##  [DATABASE STRUCTURE UPDATE V2 + NEW PUBLIC CONTROLLERS]

###  Tanggal: 2025-11-06
###  Tahap: Backend Refinement

####  Tujuan
- Restrukturisasi database
- Penambahan tabel: visi, misi, heroes, yayasan
- Update kolom pada tabel guru, staf, sejarah, alumni_review
- Tambah controller admin & public API

####  Pekerjaan (yang telah dikerjakan di repo)
- Buat migration `update_database_structure_v2` (file dibuat & diisi)
- Jalankan `php artisan migrate` untuk menerapkan perubahan struktur
- Tambah model: `Visi`, `Misi`, `Hero`, `Yayasan`
- Implementasi controller admin: `VisiController`, `MisiController`, `HeroController`, `YayasanController`
- Implementasi public controllers: `PublicVisiController`, `PublicMisiController`, `PublicHeroController`, `PublicYayasanController`
- Tambah seeders: `VisiSeeder`, `MisiSeeder`, `HeroSeeder`, `YayasanSeeder` (dijalankan individu karena AdminSeeder duplikat)
- Update `routes/api.php` untuk admin & public endpoints

####  Testing / Verifikasi
- Migration:  applied (migration run)
- Seeders:  Visi/Misi/Hero/Yayasan seeders inserted sample data (AdminSeeder may already exist; full `db:seed` aborted due to duplicate admin)
- Models & Controllers:  created and wired
- Routes:  admin (sanctum) & public routes added
- Remaining: manual endpoint testing (Postman), add file-upload support if needed, create automated feature tests

####  Status
-  Migration sukses
-  Models + Controllers selesai
-  Seeders (visi/misi/hero/yayasan) dijalankan
-  Routes diperbarui

---

Notes:
- `DatabaseSeeder::class` still calls `AdminSeeder` first; running the whole `php artisan db:seed` may fail if Admin already exists (duplicate username). To run full DatabaseSeeder safely, either remove or comment AdminSeeder from the call list, or ensure the AdminSeeder is idempotent (check for existing admin before insert).
- If you want this summary copied into `TODO.md` directly, I can append it; I avoided editing `TODO.md` in-place previously to preserve its original formatting. Ask and I'll update `TODO.md` or perform an in-place append.

---

## [LOG] 2025-11-09 - Update ProfilSekolahSeeder (before/after)

- BEFORE: `database/seeders/ProfilSekolahSeeder.php` always attempted DB::table('profil_sekolah')->insert([... 'visi'=>..., 'misi'=>...]) which failed if the DB schema had moved `visi`/`misi` into separate `visi`/`misi` tables (QueryException: Unknown column 'visi').

- ACTION: Modify `ProfilSekolahSeeder` to be idempotent and schema-aware:
  - Use Schema::hasTable/hasColumn to detect whether `profil_sekolah` has `visi`/`misi`/`tujuan`/`deskripsi_yayasan` and only write those columns.
  - Use DB::table(...)->updateOrInsert(['id' => 1], ...) to keep a single row in `profil_sekolah` (idempotent).
  - If `visi`/`misi` are split into their own tables, call updateOrInsert on `visi` and `misi` tables as well.

- AFTER: `ProfilSekolahSeeder` is now tolerant to both schemas (single table or split tables) and idempotent; re-running `php artisan db:seed` will no longer error on missing `visi` column. See `database/seeders/ProfilSekolahSeeder.php` for the exact implementation.

- EXECUTED: 2025-11-09 10:19:49 — Ran `php artisan db:seed --class=ProfilSekolahSeeder --force` after the change. Result: SUCCESS (no QueryException). Seeder updated successfully and handled both schemas.

---

## [LOG] 2025-11-09 - Seeder fixes (Sejarah, Guru, Staf, AlumniReview) & full db:seed

- Fixed additional seeders that failed during a full seed due to schema changes:
  - `SejarahSeeder` — made schema-aware and idempotent.
  - `GuruSeeder` — now supports `deskripsi` or `moto` column and is idempotent.
  - `StafSeeder` — now supports `deskripsi` or `moto` column and is idempotent.
  - `AlumniReviewSeeder` — now supports `komentar` or `kesan` column and is idempotent.

- EXECUTED: 2025-11-09 10:26:13 — Ran `php artisan db:seed --force` after these fixes. Result: SUCCESS. All seeders completed.

Notes: Default admin created/updated by `AdminSeeder`:
- username: `admin`
- password: `password`

Next steps:
- Manual verification: visit `/admin` and log in with the admin account. Test creating/updating a resource (e.g., Guru, Galeri image upload) to verify Filament resources and storage integration.
- If you want, I can (1) attempt an automated check for resource creation via tinker or (2) continue making any remaining seeders more robust. Tell me which and I will proceed.
 
---

## [LOG] 2025-11-10 - GLOBAL FORM CHANGES: hide admin_id & auto-fill; fix stubs

- BEFORE: Many Filament Create/Edit pages included an `admin_id` input or did not set `admin_id` server-side. Static analysis (Intelephense) flagged missing Filament symbols in the editor.
- ACTIONS:
  - Removed `admin_id` from forms (kept as info/comment in schema files) and implemented server-side auto-fill by adding `mutateFormDataBeforeCreate()` to Create pages and `mutateFormDataBeforeSave()` to Edit pages. These methods set `admin_id = Auth::guard('admin')->id()`.
  - Files edited (Create pages): `CreateMitra`, `CreateYayasan`, `CreateVisi`, `CreateStaf`, `CreateProfilSekolah`, `CreateSejarah`, `CreateMisi`, `CreateKontak`, `CreateHero`, `CreateKegiatan`, `CreateGaleri`, `CreateGuru`, `CreateFasilitas`, `CreateAlumniReview`.
  - Files edited (Edit pages): `EditMitra`, `EditYayasan`, `EditVisi`, `EditStaf`, `EditSejarah`, `EditHero`, `EditProfilSekolah`, `EditMisi`, `EditKontak`, `EditGaleri`, `EditKegiatan`, `EditFasilitas`, `EditAlumniReview`, `EditGuru`.
  - Also adjusted `stubs/filament_stubs.php`: made static `make()` factory signatures variadic and forwarded args to constructor to silence static analysis errors that earlier reported mismatched constructor arguments.
- AFTER: Create/Edit pages now set `admin_id` from the authenticated admin guard on create/save. IDE/static-analysis errors (from the stubs) resolved. TODO items `[GLOBAL-FORM] Sembunyikan admin_id dari SEMUA formulir dan isi secara otomatis` progressed — many pages updated; remaining resources will be updated in the next batch if any are missed.

---
- [ ] [FIX-UI] `Misi` & `Visi`: Tampilkan data di Tabel dan Infolist (View) menggunakan kolom `deskripsi`.
- [ ] [FIX-UI] `Misi` & `Visi`: Pastikan `recordTitleAttribute` diatur ke `deskripsi`.
