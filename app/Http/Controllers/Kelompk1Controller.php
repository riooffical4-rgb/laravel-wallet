<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelompk1; // Import model

class Kelompk1Controller extends Controller
{
    public function index()
    {
        // Ambil semua anggota kelompok (Andi, Arif, Lendison)
        $anggota = Kelompk1::all();

        // Kirim ke blade view
        return view('Dashboard.kelompok1', compact('anggota'));
    }
}