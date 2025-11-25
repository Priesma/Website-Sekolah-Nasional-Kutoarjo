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
    Route::get('/visi', [PublicVisiController::class, 'index']);
    Route::get('/misi', [PublicMisiController::class, 'index']);
    Route::get('/yayasan', [PublicYayasanController::class, 'index']);
    Route::get('/kontak', [PublicKontakController::class, 'index']);

    // --- SDM (Sumber Daya Manusia) ---
    Route::get('/guru', [PublicGuruController::class, 'index']);
    Route::get('/staf', [PublicStafController::class, 'index']);

    // --- Konten & Media ---
    // Galeri menangani: Kegiatan, Gambar Utama, Foto Jadul, & Random
    Route::get('/galeri', [PublicGaleriController::class, 'index']); 
    Route::get('/galeri/{id}', [PublicGaleriController::class, 'show']);
    
    // Fasilitas Sekolah
    Route::get('/fasilitas', [PublicFasilitasController::class, 'index']);

    // --- Eksternal ---
    Route::get('/mitra', [PublicMitraController::class, 'index']);
    Route::get('/testimoni', [PublicAlumniReviewController::class, 'index']); // Endpoint alumni

});

// Rute Fallback (Opsional, untuk debug)
Route::fallback(function(){
    return response()->json(['message' => 'API Endpoint Not Found'], 404);
});
