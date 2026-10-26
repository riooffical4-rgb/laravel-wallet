<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelompk1;

class AnggotaKelompok extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelompk1::create([
            'nama_anggota' => 'Muhammad Arif Asad',
            'nim' => '251044',
            'jurusan' => 'Sistem Informasi',
        ]);

        Kelompk1::create([
            'nama_anggota' => 'Lendison Wenda',
            'nim' => '251097',
            'jurusan' => 'Sistem Informasi',
        ]);

        Kelompk1::create([
            'nama_anggota' => 'Andi Dzaky Athaillah',
            'nim' => '251110',
            'jurusan' => 'Sistem Informasi',
        ]);
    }
}
