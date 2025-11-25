<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Guru;

class PublicGuruController extends Controller
{
    public function index()
    {
        $data = Guru::select('nama', 'jabatan', 'jenjang', 'deskripsi', 'foto')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data guru berhasil diambil',
            'data' => $data
        ], 200);
    }

    public function show($id)
    {
        $data = Guru::select('nama', 'jabatan', 'jenjang', 'deskripsi', 'foto')->find($id);

        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'Data guru tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail guru berhasil diambil',
            'data' => $data
        ], 200);
    }
}
