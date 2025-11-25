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
        Schema::create('alumni_review', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alumni', 100);
            $table->year('tahun_lulus');
            $table->text('komentar');
            $table->string('pekerjaan')->nullable();
            $table->string('foto', 255)->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->timestamps();

            $table->index('tahun_lulus');
            $table->foreign('admin_id')->references('id')->on('admin')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni_review');
    }
};
