<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Visi;

class PublicVisiController extends Controller
{
    public function index()
    {
        $data = Visi::orderBy('id')->get(['id','isi']);

        return response()->json([
            'success' => true,
            'message' => 'Data visi berhasil diambil',
            'data' => $data
        ], 200);
    }
}
