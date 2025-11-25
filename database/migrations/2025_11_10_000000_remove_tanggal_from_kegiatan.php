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
        if (Schema::hasTable('kegiatan') && Schema::hasColumn('kegiatan', 'tanggal')) {
            Schema::table('kegiatan', function (Blueprint $table) {
                // drop index if it exists (generated index name may vary)
                try {
                    $table->dropIndex(['tanggal']);
                } catch (\Throwable $e) {
                    // ignore if index not found
                }

                $table->dropColumn('tanggal');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('kegiatan') && ! Schema::hasColumn('kegiatan', 'tanggal')) {
            Schema::table('kegiatan', function (Blueprint $table) {
                // add tanggal back as nullable to avoid issues on rollback
                $table->date('tanggal')->nullable();
                $table->index('tanggal');
            });
        }
    }
};
