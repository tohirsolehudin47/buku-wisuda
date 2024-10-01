<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bukuwisuda;
 
Route::controller(BukuWisuda::class)->group(function () {
    Route::get('/', 'tampil_siswa');
});