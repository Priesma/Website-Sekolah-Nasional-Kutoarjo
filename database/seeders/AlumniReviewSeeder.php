<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlumniReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'nama_alumni' => 'Ahmad Surya',
                'tahun_lulus' => 2020,
                'komentar' => 'Sekolah ini sangat baik dalam membentuk karakter siswa.',
                'foto' => 'storage/app/public/alumni/ahmad.jpg',
            ],
            [
                'nama_alumni' => 'Siti Nurhaliza',
                'tahun_lulus' => 2019,
                'komentar' => 'Pengalaman belajar yang tak terlupakan.',
                'foto' => 'storage/app/public/alumni/siti.jpg',
            ],
        ];

        if (! Schema::hasTable('alumni_review')) return;

        foreach ($items as $entry) {
            $data = [];
            if (Schema::hasColumn('alumni_review', 'nama_alumni')) $data['nama_alumni'] = $entry['nama_alumni'];
            if (Schema::hasColumn('alumni_review', 'tahun_lulus')) $data['tahun_lulus'] = $entry['tahun_lulus'];
            // renamed 'komentar' -> 'kesan' in DB update
            if (Schema::hasColumn('alumni_review', 'komentar')) {
                $data['komentar'] = $entry['komentar'];
            } elseif (Schema::hasColumn('alumni_review', 'kesan')) {
                $data['kesan'] = $entry['komentar'];
            }
            if (Schema::hasColumn('alumni_review', 'foto')) $data['foto'] = $entry['foto'];
            if (Schema::hasColumn('alumni_review', 'created_at')) $data['created_at'] = now();
            if (Schema::hasColumn('alumni_review', 'updated_at')) $data['updated_at'] = now();

            if (! empty($data)) {
                $unique = [];
                if (Schema::hasColumn('alumni_review', 'nama_alumni')) $unique['nama_alumni'] = $entry['nama_alumni'];
                if (Schema::hasColumn('alumni_review', 'tahun_lulus')) $unique['tahun_lulus'] = $entry['tahun_lulus'];

                if (! empty($unique)) {
                    DB::table('alumni_review')->updateOrInsert($unique, $data);
                }
            }
        }
    }
}
