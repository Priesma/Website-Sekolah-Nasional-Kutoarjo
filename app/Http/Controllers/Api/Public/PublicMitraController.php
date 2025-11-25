<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Mitra;

class PublicMitraController extends Controller
{
    public function index()
    {
        $data = Mitra::select('nama_mitra', 'deskripsi', 'logo')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data mitra berhasil diambil',
            'data' => $data
        ], 200);
    }

    public function show($id)
    {
        $data = Mitra::select('nama_mitra', 'deskripsi', 'logo')->find($id);

        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'Data mitra tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail mitra berhasil diambil',
            'data' => $data
        ], 200);
    }
}
