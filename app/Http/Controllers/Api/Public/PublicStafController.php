<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Staf;

class PublicStafController extends Controller
{
    public function index()
    {
        $data = Staf::select('nama', 'jabatan', 'deskripsi', 'foto')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data staf berhasil diambil',
            'data' => $data
        ], 200);
    }

    public function show($id)
    {
        $data = Staf::select('nama', 'jabatan', 'deskripsi', 'foto')->find($id);

        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'Data staf tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail staf berhasil diambil',
            'data' => $data
        ], 200);
    }
}
