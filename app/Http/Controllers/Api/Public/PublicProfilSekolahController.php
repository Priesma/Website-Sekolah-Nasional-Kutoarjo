<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\ProfilSekolah;

class PublicProfilSekolahController extends Controller
{
    public function index()
    {
        $data = ProfilSekolah::select('visi', 'misi', 'tujuan', 'deskripsi_yayasan')->first();

        return response()->json([
            'success' => true,
            'message' => 'Data profil sekolah berhasil diambil',
            'data' => $data
        ], 200);
    }
}
