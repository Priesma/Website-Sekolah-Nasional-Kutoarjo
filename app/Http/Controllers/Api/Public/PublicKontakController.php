<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Kontak;

class PublicKontakController extends Controller
{
    protected $model = \App\Models\Kontak::class;
    public function index()
    {
        $data = $this->model::first();

        return response()->json([
            'success' => true,
            'message' => 'Data kontak berhasil diambil',
            'data' => $data
        ], 200);
    }

    public function show($id)
    {
        $data = $this->model::find($id);

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
