<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokters';

    protected $fillable = [
        'id',
        'name',
        'gender',
        'tmp_lahir',
        'tgl_lahir',
        'alamat',
        'kategori',
        'no_telp',
        'unit_kerja',
    ];
}   
