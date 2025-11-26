<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Tujuan;

class PublicTujuanController extends Controller
{
    protected $model = \App\Models\Tujuan::class;
    public function index()
    {
        $data = $this->model::get();

        return response()->json([
            'success' => true,
            'message' => 'Data tujuan berhasil diambil',
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
