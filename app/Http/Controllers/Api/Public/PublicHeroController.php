<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Hero;

class PublicHeroController extends Controller
{
    protected $model = \App\Models\Hero::class;
    public function index()
    {
        $data = $this->model::get();

        return response()->json([
            'success' => true,
            'message' => 'Data hero berhasil diambil',
            'data' => $data
        ], 200);
    }

    public function show($id)
    {
        $data = $this->model::find($id);
        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'Data hero tidak ditemukan'
            ], 404);
        }
        return response()->json([
            'success' => true,
            'message' => 'Detail hero berhasil diambil',
            'data' => $data
        ], 200);
    }
}
