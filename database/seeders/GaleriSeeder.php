<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galeri')->insert([
            [
                'judul' => 'Kegiatan Belajar Mengajar',
                'kategori' => 'Kegiatan Akademik',
                'foto_url' => 'storage/app/public/galeri/kbm.jpg',
                'admin_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Fasilitas Ruang Kelas',
                'kategori' => 'Fasilitas',
                'foto_url' => 'storage/app/public/galeri/kelas.jpg',
                'admin_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
