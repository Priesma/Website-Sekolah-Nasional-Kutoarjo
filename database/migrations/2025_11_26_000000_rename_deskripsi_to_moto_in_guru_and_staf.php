<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Update tabel Guru
        Schema::table('guru', function (Blueprint $table) {
            if (Schema::hasColumn('guru', 'deskripsi') && !Schema::hasColumn('guru', 'moto')) {
                $table->renameColumn('deskripsi', 'moto');
            } elseif (!Schema::hasColumn('guru', 'moto')) {
                // Jaga-jaga jika kolom deskripsi tidak ada, buat baru
                $table->text('moto')->nullable();
            }
        });

        // Update tabel Staf
        Schema::table('staf', function (Blueprint $table) {
            if (Schema::hasColumn('staf', 'deskripsi') && !Schema::hasColumn('staf', 'moto')) {
                $table->renameColumn('deskripsi', 'moto');
            } elseif (!Schema::hasColumn('staf', 'moto')) {
                $table->text('moto')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('guru', function (Blueprint $table) {
            if (Schema::hasColumn('guru', 'moto')) {
                $table->renameColumn('moto', 'deskripsi');
            }
        });
        Schema::table('staf', function (Blueprint $table) {
            if (Schema::hasColumn('staf', 'moto')) {
                $table->renameColumn('moto', 'deskripsi');
            }
        });
    }
};
