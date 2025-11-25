<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Sejarah;

class PublicSejarahController extends Controller
{
    public function index()
    {
        $data = Sejarah::select('judul', 'isi', 'tanggal', 'gambar')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data sejarah berhasil diambil',
            'data' => $data
        ], 200);
    }
}
