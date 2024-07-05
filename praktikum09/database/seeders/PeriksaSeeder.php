<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('periksas')->insert([
            [
                'tanggal' => '2022-01-01',
                'berat' => 50,
                'tinggi' => 160,
                'tensi' => 120,
                'keterangan' => 'sakit kepala', 
                'pasien_id' => 1,
                'dokter_id' => 1
            ],
            [
                'tanggal' => '2022-01-02',
                'berat' => 60,
                'tinggi' => 170,
                'tensi' => 130,
                'keterangan' => 'sakit dada', 
                'pasien_id' => 2,
                'dokter_id' => 2
            ]
            ]);
    }
}
