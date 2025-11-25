<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TujuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tujuanText = 'Mencetak generasi yang cerdas, berakhlak mulia, dan siap menghadapi tantangan masa depan.';

        if (Schema::hasTable('tujuan')) {
            $data = ['tujuan' => $tujuanText];
            if (Schema::hasColumn('tujuan', 'created_at')) $data['created_at'] = now();
            if (Schema::hasColumn('tujuan', 'updated_at')) $data['updated_at'] = now();

            $data['admin_id'] = $data['admin_id'] ?? 1;
            DB::table('tujuan')->updateOrInsert(['id' => 1], $data);
        }

        // Also be tolerant: if old profil_sekolah table exists, copy tujuan column into new table if possible.
        if (Schema::hasTable('profil_sekolah') && Schema::hasColumn('profil_sekolah', 'tujuan') && Schema::hasTable('tujuan')) {
            $row = DB::table('profil_sekolah')->select('tujuan')->first();
            if ($row && !empty($row->tujuan)) {
                DB::table('tujuan')->updateOrInsert(['id' => 1], ['tujuan' => $row->tujuan, 'updated_at' => now(), 'created_at' => now(), 'admin_id' => 1]);
            }
        }
    }
}
