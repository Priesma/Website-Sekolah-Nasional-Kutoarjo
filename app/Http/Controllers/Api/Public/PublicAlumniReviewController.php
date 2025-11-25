<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\AlumniReview;

class PublicAlumniReviewController extends Controller
{
    public function index()
    {
        $data = AlumniReview::select('nama_alumni', 'tahun_lulus', 'komentar', 'foto')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data alumni review berhasil diambil',
            'data' => $data
        ], 200);
    }

    public function show($id)
    {
        $data = AlumniReview::select('nama_alumni', 'tahun_lulus', 'komentar', 'foto')->find($id);

        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'Data alumni review tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail alumni review berhasil diambil',
            'data' => $data
        ], 200);
    }
}
