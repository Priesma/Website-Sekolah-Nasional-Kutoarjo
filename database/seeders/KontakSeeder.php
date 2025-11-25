<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kontak')->insert([
            'alamat' => 'Jl. Pendidikan No. 123, Kutoarjo, Jawa Tengah',
            'email' => 'info@sekolahnasional.com',
            'telepon' => '0281-123456',
            'link_yt' => null,
            'link_ig' => 'https://instagram.com/sekolah',
            'link_fb' => 'https://facebook.com/sekolah',
            'admin_id' => 1,
            'embed_google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.123!2d110.123!3d-7.456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMjcnMjQuMCJTIDExMMKwMDcnMjYuOCJF!5e0!3m2!1sen!2sid!4v1234567890" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
