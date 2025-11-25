<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class StafSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'nama' => 'Staf Administrasi 1',
                'jabatan' => 'Administrasi',
                'departemen' => 'Administrasi',
                'deskripsi' => 'Mengelola administrasi sekolah.',
                'foto' => 'storage/app/public/staf/dummy.jpg',
            ],
            [
                'nama' => 'Staf Keamanan 1',
                'jabatan' => 'Security',
                'departemen' => 'Keamanan',
                'deskripsi' => 'Menjaga keamanan sekolah.',
                'foto' => 'storage/app/public/staf/dummy.jpg',
            ],
        ];

        if (! Schema::hasTable('staf')) {
            return;
        }

        foreach ($items as $entry) {
            $data = [];
            if (Schema::hasColumn('staf', 'nama')) $data['nama'] = $entry['nama'];
            if (Schema::hasColumn('staf', 'jabatan')) $data['jabatan'] = $entry['jabatan'];
            if (Schema::hasColumn('staf', 'departemen')) $data['departemen'] = $entry['departemen'];
            if (Schema::hasColumn('staf', 'deskripsi')) {
                $data['deskripsi'] = $entry['deskripsi'];
            } elseif (Schema::hasColumn('staf', 'moto')) {
                $data['moto'] = $entry['deskripsi'];
            }
            if (Schema::hasColumn('staf', 'foto')) $data['foto'] = $entry['foto'];
            if (Schema::hasColumn('staf', 'created_at')) $data['created_at'] = now();
            if (Schema::hasColumn('staf', 'updated_at')) $data['updated_at'] = now();

            if (! empty($data)) {
                $unique = [];
                if (Schema::hasColumn('staf', 'nama')) $unique['nama'] = $entry['nama'];
                if (Schema::hasColumn('staf', 'jabatan')) $unique['jabatan'] = $entry['jabatan'];

                if (! empty($unique)) {
                    DB::table('staf')->updateOrInsert($unique, $data);
                }
            }
        }
    }
}
