<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. Profil Sekolah: hapus kolom visi & misi
        if (Schema::hasTable('profil_sekolah')) {
            Schema::table('profil_sekolah', function (Blueprint $table) {
                if (Schema::hasColumn('profil_sekolah', 'visi') || Schema::hasColumn('profil_sekolah', 'misi')) {
                    $columnsToDrop = [];
                    if (Schema::hasColumn('profil_sekolah', 'visi')) $columnsToDrop[] = 'visi';
                    if (Schema::hasColumn('profil_sekolah', 'misi')) $columnsToDrop[] = 'misi';
                    if (!empty($columnsToDrop)) {
                        $table->dropColumn($columnsToDrop);
                    }
                }
            });
        }

        // 2. Buat tabel visi
        if (!Schema::hasTable('visi')) {
            Schema::create('visi', function (Blueprint $table) {
                $table->id();
                $table->text('isi');
                $table->integer('urutan')->nullable();
                $table->foreignId('admin_id')->nullable()->constrained('admin')->nullOnDelete();
                $table->timestamps();
            });
        }

        // 3. Buat tabel misi
        if (!Schema::hasTable('misi')) {
            Schema::create('misi', function (Blueprint $table) {
                $table->id();
                $table->text('isi');
                $table->integer('urutan')->nullable();
                $table->foreignId('admin_id')->nullable()->constrained('admin')->nullOnDelete();
                $table->timestamps();
            });
        }

        // 4. Sejarah: hapus kolom judul, isi, tanggal
        if (Schema::hasTable('sejarah')) {
            Schema::table('sejarah', function (Blueprint $table) {
                $cols = [];
                if (Schema::hasColumn('sejarah', 'judul')) $cols[] = 'judul';
                if (Schema::hasColumn('sejarah', 'isi')) $cols[] = 'isi';
                if (Schema::hasColumn('sejarah', 'tanggal')) $cols[] = 'tanggal';
                if (!empty($cols)) $table->dropColumn($cols);
            });
        }

        // 5. Guru: ubah deskripsi -> moto
        if (Schema::hasTable('guru') && Schema::hasColumn('guru', 'deskripsi') && !Schema::hasColumn('guru', 'moto')) {
            Schema::table('guru', function (Blueprint $table) {
                $table->renameColumn('deskripsi', 'moto');
            });
        }

        // 6. Staf: ubah deskripsi -> moto
        if (Schema::hasTable('staf') && Schema::hasColumn('staf', 'deskripsi') && !Schema::hasColumn('staf', 'moto')) {
            Schema::table('staf', function (Blueprint $table) {
                $table->renameColumn('deskripsi', 'moto');
            });
        }

        // 7. Heroes
        if (!Schema::hasTable('heroes')) {
            Schema::create('heroes', function (Blueprint $table) {
                $table->id();
                $table->string('judul')->nullable();
                $table->text('deskripsi')->nullable();
                $table->string('gambar')->nullable();
                $table->foreignId('admin_id')->nullable()->constrained('admin')->nullOnDelete();
                $table->timestamps();
            });
        }

        // 8. Alumni Review: tambah pekerjaan + ubah komentar → kesan
        if (Schema::hasTable('alumni_review')) {
            Schema::table('alumni_review', function (Blueprint $table) {
                if (Schema::hasColumn('alumni_review', 'komentar') && !Schema::hasColumn('alumni_review', 'kesan')) {
                    $table->renameColumn('komentar', 'kesan');
                }
                if (!Schema::hasColumn('alumni_review', 'pekerjaan')) {
                    $table->string('pekerjaan')->nullable()->after('tahun_lulus');
                }
            });
        }

        // 9. Yayasan
        if (!Schema::hasTable('yayasan')) {
            Schema::create('yayasan', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
                $table->text('deskripsi')->nullable();
                $table->string('gambar')->nullable();
                $table->foreignId('admin_id')->nullable()->constrained('admin')->nullOnDelete();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('profil_sekolah')) {
            Schema::table('profil_sekolah', function (Blueprint $table) {
                if (!Schema::hasColumn('profil_sekolah', 'visi')) $table->text('visi')->nullable();
                if (!Schema::hasColumn('profil_sekolah', 'misi')) $table->text('misi')->nullable();
            });
        }

        Schema::dropIfExists('visi');
        Schema::dropIfExists('misi');

        if (Schema::hasTable('sejarah')) {
            Schema::table('sejarah', function (Blueprint $table) {
                if (!Schema::hasColumn('sejarah', 'judul')) $table->string('judul')->nullable();
                if (!Schema::hasColumn('sejarah', 'isi')) $table->text('isi')->nullable();
                if (!Schema::hasColumn('sejarah', 'tanggal')) $table->date('tanggal')->nullable();
            });
        }

        if (Schema::hasTable('guru') && Schema::hasColumn('guru', 'moto')) {
            Schema::table('guru', function (Blueprint $table) {
                $table->renameColumn('moto', 'deskripsi');
            });
        }

        if (Schema::hasTable('staf') && Schema::hasColumn('staf', 'moto')) {
            Schema::table('staf', function (Blueprint $table) {
                $table->renameColumn('moto', 'deskripsi');
            });
        }

        Schema::dropIfExists('heroes');

        if (Schema::hasTable('alumni_review')) {
            Schema::table('alumni_review', function (Blueprint $table) {
                if (Schema::hasColumn('alumni_review', 'kesan') && !Schema::hasColumn('alumni_review', 'komentar')) {
                    $table->renameColumn('kesan', 'komentar');
                }
                if (Schema::hasColumn('alumni_review', 'pekerjaan')) {
                    $table->dropColumn('pekerjaan');
                }
            });
        }

        Schema::dropIfExists('yayasan');
    }
};
