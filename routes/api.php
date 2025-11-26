<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes (Public / Headless)
|--------------------------------------------------------------------------
*/

// Import Public Controllers
use App\Http\Controllers\Api\Public\PublicAlumniReviewController;
use App\Http\Controllers\Api\Public\PublicFasilitasController;
use App\Http\Controllers\Api\Public\PublicGaleriController;
use App\Http\Controllers\Api\Public\PublicGuruController;
use App\Http\Controllers\Api\Public\PublicKontakController;
use App\Http\Controllers\Api\Public\PublicMisiController;
use App\Http\Controllers\Api\Public\PublicMitraController;
use App\Http\Controllers\Api\Public\PublicStafController;
use App\Http\Controllers\Api\Public\PublicTujuanController;
use App\Http\Controllers\Api\Public\PublicVisiController;
use App\Http\Controllers\Api\Public\PublicYayasanController;

Route::prefix('public')->group(function () {
    
    // --- Profil & Identitas Sekolah ---
    Route::get('/tujuan', [PublicTujuanController::class, 'index']);
    Route::get('/tujuan/{id}', [PublicTujuanController::class, 'show']); // <-- BARU
    Route::get('/visi', [PublicVisiController::class, 'index']);
    Route::get('/visi/{id}', [PublicVisiController::class, 'show']); // <-- BARU
    Route::get('/misi', [PublicMisiController::class, 'index']);
    Route::get('/misi/{id}', [PublicMisiController::class, 'show']); // <-- BARU
    Route::get('/yayasan', [PublicYayasanController::class, 'index']);
    Route::get('/yayasan/{id}', [PublicYayasanController::class, 'show']); // <-- BARU
    Route::get('/kontak', [PublicKontakController::class, 'index']);
    Route::get('/kontak/{id}', [PublicKontakController::class, 'show']); // <-- BARU

    // --- SDM (Sumber Daya Manusia) ---
    Route::get('/guru', [PublicGuruController::class, 'index']);
    Route::get('/guru/{id}', [PublicGuruController::class, 'show']); // <-- BARU
    Route::get('/staf', [PublicStafController::class, 'index']);
    Route::get('/staf/{id}', [PublicStafController::class, 'show']); // <-- BARU

    // --- Konten & Media ---
    // Galeri menangani: Kegiatan, Gambar Utama, Foto Jadul, & Random
    Route::get('/galeri', [PublicGaleriController::class, 'index']); 
    Route::get('/galeri/{id}', [PublicGaleriController::class, 'show']);
    
    // Fasilitas Sekolah
    Route::get('/fasilitas', [PublicFasilitasController::class, 'index']);
    Route::get('/fasilitas/{id}', [PublicFasilitasController::class, 'show']); // <-- BARU

    // --- Eksternal ---
    Route::get('/mitra', [PublicMitraController::class, 'index']);
    Route::get('/mitra/{id}', [PublicMitraController::class, 'show']); // <-- BARU
    Route::get('/testimoni', [PublicAlumniReviewController::class, 'index']); // Endpoint alumni
    Route::get('/testimoni/{id}', [PublicAlumniReviewController::class, 'show']); // <-- BARU

});

// Rute Fallback (Opsional, untuk debug)
Route::fallback(function(){
    return response()->json(['message' => 'API Endpoint Not Found'], 404);
});
