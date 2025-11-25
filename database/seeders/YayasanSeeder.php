<?php

namespace Database\Seeders;

use App\Models\Yayasan;
use Illuminate\Database\Seeder;

class YayasanSeeder extends Seeder
{
    public function run()
    {
        Yayasan::create(["nama" => "Yayasan Pendidikan Kutoarjo", "deskripsi" => "Bersama memajukan pendidikan di wilayah Kutoarjo.", "gambar" => "yayasan1.jpg", "admin_id" => 1]);
    }
}
