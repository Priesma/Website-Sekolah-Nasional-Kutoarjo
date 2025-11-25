<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Tujuan;

class PublicTujuanController extends Controller
{
    public function index()
    {
        $data = Tujuan::select('tujuan', 'created_at')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data tujuan berhasil diambil',
            'data' => $data
        ], 200);
    }
}
