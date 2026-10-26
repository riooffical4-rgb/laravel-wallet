<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kelompk1Controller;
use App\Http\Controllers\TransaksiController;

Route::resource('ewallet', TransaksiController::class);
Route::get ('/rio', [Kelompk1Controller::class, 'index'])->name('kelompok.index');

