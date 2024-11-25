<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/buku', [BukuController::class,'index'])->name('buku');
Route::post('/buku', [BukuController::class,'store'])->name('bukus.store');
Route::get('/buku/create', [BukuController::class,'create'])->name('bukus.create');
Route::put('/buku/{buku}', [BukuController::class,'update'])->name('bukus.update');
Route::delete('/buku/{buku}', [BukuController::class,'destroy'])->name('bukus.destroy');
Route::get('/buku/{buku}/edit', [BukuController::class,'edit'])->name('buku.edit');
