<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'nama' => 'Guru TK 1',
                'jabatan' => 'Guru TK',
                'jenjang' => 'TK',
                'deskripsi' => 'Guru TK berpengalaman.',
                'foto' => 'storage/app/public/guru/dummy.jpg',
            ],
            [
                'nama' => 'Guru SD 1',
                'jabatan' => 'Guru SD',
                'jenjang' => 'SD',
                'deskripsi' => 'Guru SD ahli matematika.',
                'foto' => 'storage/app/public/guru/dummy.jpg',
            ],
        ];

        if (! Schema::hasTable('guru')) {
            return;
        }

        foreach ($items as $entry) {
            $data = [];
            if (Schema::hasColumn('guru', 'nama')) $data['nama'] = $entry['nama'];
            if (Schema::hasColumn('guru', 'jabatan')) $data['jabatan'] = $entry['jabatan'];
            if (Schema::hasColumn('guru', 'jenjang')) $data['jenjang'] = $entry['jenjang'];
            // old schema used 'deskripsi', new schema renamed it to 'moto'
            if (Schema::hasColumn('guru', 'deskripsi')) {
                $data['deskripsi'] = $entry['deskripsi'];
            } elseif (Schema::hasColumn('guru', 'moto')) {
                $data['moto'] = $entry['deskripsi'];
            }
            if (Schema::hasColumn('guru', 'foto')) $data['foto'] = $entry['foto'];
            if (Schema::hasColumn('guru', 'created_at')) $data['created_at'] = now();
            if (Schema::hasColumn('guru', 'updated_at')) $data['updated_at'] = now();

            if (! empty($data)) {
                $unique = [];
                if (Schema::hasColumn('guru', 'nama')) $unique['nama'] = $entry['nama'];
                if (Schema::hasColumn('guru', 'jabatan')) $unique['jabatan'] = $entry['jabatan'];

                if (! empty($unique)) {
                    DB::table('guru')->updateOrInsert($unique, $data);
                }
            }
        }
    }
}
