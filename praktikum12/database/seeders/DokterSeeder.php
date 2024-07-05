<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokters')->insert([
        [
            'name' => 'dr. Ir. H. Fadli, M.Pd',
            'gender' => 'L',
            'tmp_lahir' => 'Jakarta',
            'tgl_lahir' => '2000-01-01',
            'alamat' => 'Jl. Raya Cipinang',
            'kategori' => 'Umum',
            'no_telp' => '081234567890',
            'unit_kerja' => 'Puskesmas Cipinang',
        ],
        
        [
            'name' => 'dr. Ir. H. Yoshi, M.Pd',
            'gender' => 'L',
            'tmp_lahir' => 'Jakarta',
            'tgl_lahir' => '2004-06-24',
            'alamat' => 'Perum Taman Bojong Lestari',
            'kategori' => 'Mata',
            'no_telp' => '081234567890',
            'unit_kerja' => 'Puskesmas Cipinang',
        ]

        ]);
    }
}
