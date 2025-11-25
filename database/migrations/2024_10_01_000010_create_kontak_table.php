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
        Schema::create('kontak', function (Blueprint $table) {
            $table->id();
            $table->text('alamat');
            $table->string('email', 100);
            $table->string('telepon', 20);
            $table->string('link_yt')->nullable();
            $table->string('link_ig')->nullable();
            $table->string('link_fb')->nullable();
            $table->text('embed_google_maps')->nullable();
            $table->foreignId('admin_id')->nullable()->constrained('admin')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontak');
    }
};
