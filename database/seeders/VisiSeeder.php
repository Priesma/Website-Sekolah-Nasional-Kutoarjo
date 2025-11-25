<?php

namespace Database\Seeders;

use App\Models\Visi;
use Illuminate\Database\Seeder;

class VisiSeeder extends Seeder
{
    public function run()
    {
        Visi::create(["isi" => "Menjadi sekolah unggul yang berkarakter dan berprestasi.", "admin_id" => 1]);
        Visi::create(["isi" => "Mewujudkan lulusan siap menghadapi tantangan global.", "admin_id" => 1]);
    }
}
