<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Misi;

class PublicMisiController extends Controller
{
    protected $model = \App\Models\Misi::class;
    public function index()
    {
    $data = $this->model::orderBy('id')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data misi berhasil diambil',
            'data' => $data
        ], 200);
    }

    public function show($id)
    {
    $data = $this->model::find($id);
        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'Data misi tidak ditemukan'
            ], 404);
        }
        return response()->json([
            'success' => true,
            'message' => 'Detail misi berhasil diambil',
            'data' => $data
        ], 200);
    }
}
