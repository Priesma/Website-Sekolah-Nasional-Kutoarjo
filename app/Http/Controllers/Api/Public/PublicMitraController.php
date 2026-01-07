<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Mitra;

class PublicMitraController extends Controller
{
    protected $model = \App\Models\Mitra::class;
    public function index()
    {
        $data = $this->model::with('anggota')->latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'Data mitra berhasil diambil',
            'data' => $data
        ], 200);
    }

    public function show($id)
    {
        $data = $this->model::with('anggota')->find($id);

        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail data berhasil diambil',
            'data' => $data
        ], 200);
    }
}
