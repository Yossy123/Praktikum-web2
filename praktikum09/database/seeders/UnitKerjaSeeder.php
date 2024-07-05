<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('unit_kerjas')->insert([
        [
            'kode' => '1001',
            'nama_unit' => 'Dinas Pendidikan',
            'lokasi' => 'Jl. Raya Cempaka Putih No. 1',
        ],

        [
            'kode' => '1002',
            'nama_unit' => 'Dinas Pariwisata',
            'lokasi' => 'Jl. Raya Cempaka Putih No. 2',
        ],
        
        ]);
    }
}
