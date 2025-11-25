<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;

class PublicKegiatanController extends Controller
{
    public function index()
    {
        $data = Kegiatan::select('nama_kegiatan', 'deskripsi', 'foto', 'tanggal')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data kegiatan berhasil diambil',
            'data' => $data
        ], 200);
    }

    public function show($id)
    {
        $data = Kegiatan::select('nama_kegiatan', 'deskripsi', 'foto', 'tanggal')->find($id);

        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'Data kegiatan tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail kegiatan berhasil diambil',
            'data' => $data
        ], 200);
    }
}
