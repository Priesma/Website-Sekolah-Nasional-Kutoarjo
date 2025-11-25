<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Yayasan;

class PublicYayasanController extends Controller
{
    public function index()
    {
        $data = Yayasan::select('id','nama','deskripsi','gambar')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data yayasan berhasil diambil',
            'data' => $data
        ], 200);
    }

    public function show($id)
    {
        $data = Yayasan::select('id','nama','deskripsi','gambar')->find($id);
        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'Data yayasan tidak ditemukan'
            ], 404);
        }
        return response()->json([
            'success' => true,
            'message' => 'Detail yayasan berhasil diambil',
            'data' => $data
        ], 200);
    }
}
