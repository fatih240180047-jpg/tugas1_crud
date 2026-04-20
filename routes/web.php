<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\BukuController;

// Baris ini mencakup Create, Read, Update, dan Delete tadi
Route::resource('buku', BukuController::class);