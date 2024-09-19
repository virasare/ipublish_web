<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
            [
                'NIP' => '123456',
                'NIDN' => '654321',
                'nama_dosen' => 'Dr. John Doe',
                'no_telp' => '1234567890',
            ],
            [
                'NIP' => '789012',
                'NIDN' => '210987',
                'nama_dosen' => 'Prof. Jane Smith',
                'no_telp' => '9876543210',
            ],
            [
                'NIP' => '345678',
                'NIDN' => '876543',
                'nama_dosen' => 'Dr. Alice Brown',
                'no_telp' => '1122334455',
            ],
        ]);
    }
}
