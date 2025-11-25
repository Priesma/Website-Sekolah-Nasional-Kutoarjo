<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Make the seeder idempotent: insert or update the admin user
        DB::table('admin')->updateOrInsert(
            ['username' => 'adminsekolahkutoarjo012025'],
            [
                'password' => Hash::make('bukansembarangadmin2025!'),
                'name' => 'Administrator',
                'email' => 'admin@sekolah.com',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
