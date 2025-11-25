<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Misi;

class PublicMisiController extends Controller
{
    public function index()
    {
    $data = Misi::orderBy('id')->get(['id','isi']);

        return response()->json([
            'success' => true,
            'message' => 'Data misi berhasil diambil',
            'data' => $data
        ], 200);
    }

    public function show($id)
    {
    $data = Misi::select('id','isi')->find($id);
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
