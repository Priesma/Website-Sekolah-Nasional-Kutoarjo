<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Galeri;

class PublicGaleriController extends Controller
{
    protected $model = \App\Models\Galeri::class;
    public function index()
    {
        $data = Galeri::latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'Data galeri berhasil diambil',
            'data' => $data
        ], 200);
    }

    public function show($id)
    {
        $data = $this->model::find($id);

        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'Data galeri tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail galeri berhasil diambil',
            'data' => $data
        ], 200);
    }
}
