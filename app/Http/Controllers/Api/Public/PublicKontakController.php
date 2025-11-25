<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Models\Kontak;

class PublicKontakController extends Controller
{
    public function index()
    {
        $data = Kontak::select('alamat', 'email', 'telepon', 'link_media_sosial', 'embed_google_maps')->first();

        return response()->json([
            'success' => true,
            'message' => 'Data kontak berhasil diambil',
            'data' => $data
        ], 200);
    }
}
