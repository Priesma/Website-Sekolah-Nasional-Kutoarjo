<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fasilitas')->insert([
            [
                'nama_fasilitas' => 'Ruang Kelas TK',
                'deskripsi' => 'Ruang kelas yang nyaman untuk anak TK.',
                'foto' => 'storage/app/public/fasilitas/kelas_tk.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_fasilitas' => 'Lapangan Olahraga',
                'deskripsi' => 'Lapangan untuk kegiatan olahraga siswa.',
                'foto' => 'storage/app/public/fasilitas/lapangan.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
