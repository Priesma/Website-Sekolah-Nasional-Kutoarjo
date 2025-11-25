<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Hero;

class PublicHeroController extends Controller
{
    public function index()
    {
        $data = Hero::select('id','judul','deskripsi','gambar')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data hero berhasil diambil',
            'data' => $data
        ], 200);
    }

    public function show($id)
    {
        $data = Hero::select('id','judul','deskripsi','gambar')->find($id);
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
