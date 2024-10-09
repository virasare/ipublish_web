<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed data ke tabel users
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => null,
            'password' => Hash::make('admin123'),
            'roles' => '1',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed data ke tabel dosen
        DB::table('dosen')->insert([
            'NIP' => '12345678',
            'NIDN' => '100200300',
            'nama_dosen' => 'Admin Dosen',
            'no_telp' => '08123456789',
            'email' => 'admin@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
