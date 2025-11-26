<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;

class PublicFasilitasController extends Controller
{
    protected $model = \App\Models\Fasilitas::class;
    public function index()
    {
        $data = $this->model::latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'Data fasilitas berhasil diambil',
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
