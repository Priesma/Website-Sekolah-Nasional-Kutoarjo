<?php

namespace Database\Seeders;

use App\Models\Misi;
use Illuminate\Database\Seeder;

class MisiSeeder extends Seeder
{
    public function run()
    {
        Misi::create(["isi" => "Meningkatkan kualitas pembelajaran melalui metode inovatif.", "admin_id" => 1]);
        Misi::create(["isi" => "Mendorong pengembangan karakter dan kedisiplinan siswa.", "admin_id" => 1]);
        Misi::create(["isi" => "Menjalin kemitraan dengan masyarakat dan dunia industri.", "admin_id" => 1]);
    }
}
