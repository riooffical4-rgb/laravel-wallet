<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelompk1 extends Model
{
    protected $table = 'kelompok1s';
    protected $fillable = [
        'nama_anggota',
        'nim',
        'jurusan',
    ];
}
