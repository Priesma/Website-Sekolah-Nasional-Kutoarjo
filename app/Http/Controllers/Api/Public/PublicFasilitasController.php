<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;

class PublicFasilitasController extends Controller
{
    public function index()
    {
        $data = Fasilitas::select('nama_fasilitas', 'deskripsi', 'foto')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data fasilitas berhasil diambil',
            'data' => $data
        ], 200);
    }

    public function show($id)
    {
        $data = Fasilitas::select('nama_fasilitas', 'deskripsi', 'foto')->find($id);

        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'Data fasilitas tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail fasilitas berhasil diambil',
            'data' => $data
        ], 200);
    }
}
