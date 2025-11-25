<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProfilSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Make this seeder idempotent and tolerant to schema changes.
        $visiText = 'Menjadi sekolah unggul dalam pendidikan anak usia dini dan dasar yang berbasis nilai-nilai Islam dan nasionalisme.';
        $misiText = 'Menyelenggarakan pendidikan berkualitas, membentuk karakter siswa, dan mengembangkan potensi siswa secara holistik.';
        $tujuanText = 'Mencetak generasi yang cerdas, berakhlak mulia, dan siap menghadapi tantangan masa depan.';
        $deskripsiYayasan = 'Yayasan Pendidikan Nasional Kutoarjo didirikan untuk memajukan pendidikan di daerah Kutoarjo.';

        // If the old single-row table still has columns, updateOrInsert the first row (id = 1)
        if (Schema::hasTable('profil_sekolah')) {
            $data = [];
            if (Schema::hasColumn('profil_sekolah', 'visi')) $data['visi'] = $visiText;
            if (Schema::hasColumn('profil_sekolah', 'misi')) $data['misi'] = $misiText;
            if (Schema::hasColumn('profil_sekolah', 'tujuan')) $data['tujuan'] = $tujuanText;
            if (Schema::hasColumn('profil_sekolah', 'deskripsi_yayasan')) $data['deskripsi_yayasan'] = $deskripsiYayasan;

            if (!empty($data)) {
                // keep idempotent: ensure there's a single row with id=1
                DB::table('profil_sekolah')->updateOrInsert(
                    ['id' => 1],
                    array_merge($data, ['updated_at' => now(), 'created_at' => now()])
                );
            }
        }

        // If the project migrated visi/misi into their own tables, seed those too (idempotent)
        if (Schema::hasTable('visi')) {
            $visiData = ['isi' => $visiText];
            if (Schema::hasColumn('visi', 'urutan')) $visiData['urutan'] = 1;
            if (Schema::hasColumn('visi', 'created_at')) $visiData['created_at'] = now();
            if (Schema::hasColumn('visi', 'updated_at')) $visiData['updated_at'] = now();

            DB::table('visi')->updateOrInsert([
                'isi' => $visiText,
            ], $visiData);
        }

        if (Schema::hasTable('misi')) {
            $misiData = ['isi' => $misiText];
            if (Schema::hasColumn('misi', 'urutan')) $misiData['urutan'] = 1;
            if (Schema::hasColumn('misi', 'created_at')) $misiData['created_at'] = now();
            if (Schema::hasColumn('misi', 'updated_at')) $misiData['updated_at'] = now();

            DB::table('misi')->updateOrInsert([
                'isi' => $misiText,
            ], $misiData);
        }
    }
}
