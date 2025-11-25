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
        if (Schema::hasTable('visi') && Schema::hasColumn('visi', 'urutan')) {
            Schema::table('visi', function (Blueprint $table) {
                $table->dropColumn('urutan');
            });
        }

        if (Schema::hasTable('misi') && Schema::hasColumn('misi', 'urutan')) {
            Schema::table('misi', function (Blueprint $table) {
                $table->dropColumn('urutan');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('visi') && !Schema::hasColumn('visi', 'urutan')) {
            Schema::table('visi', function (Blueprint $table) {
                $table->integer('urutan')->nullable()->after('isi');
            });
        }

        if (Schema::hasTable('misi') && !Schema::hasColumn('misi', 'urutan')) {
            Schema::table('misi', function (Blueprint $table) {
                $table->integer('urutan')->nullable()->after('isi');
            });
        }
    }
};
