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
        // Migration neutralized: Kegiatan table creation removed per cleanup plan.
        // No action in up() to avoid recreating the table.
        return;
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Migration neutralized: nothing to rollback.
        return;
    }
};
