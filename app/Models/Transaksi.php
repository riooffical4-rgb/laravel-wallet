<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    /** @use HasFactory<\Database\Factories\TransaksiFactory> */
    use HasFactory;
    protected $table = 'transaksis';
    protected $fillable = [
        'keterangan',
        'nominal',
        'tipe',
        'tanggal_transaksi',
    ];

    protected $casts = [
        'tanggal_transaksi' => 'date',
        'nominal' => 'decimal:2'
    ];
}
