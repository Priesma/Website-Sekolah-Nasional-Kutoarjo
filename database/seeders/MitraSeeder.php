<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mitra')->insert([
            [
                'nama_mitra' => 'PT. Edukasi Nusantara',
                'logo' => 'storage/app/public/mitra/edukasi.jpg',
                'deskripsi' => 'Mitra dalam pengembangan kurikulum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_mitra' => 'Yayasan Pendidikan Maju',
                'logo' => 'storage/app/public/mitra/maju.jpg',
                'deskripsi' => 'Mitra dalam program beasiswa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
