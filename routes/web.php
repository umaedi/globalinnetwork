<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/auth/google', [Auth\AuthGoogle::class, 'redirect'])->name('auth-google');
Route::get('/auth/google/callback', [Auth\AuthGoogle::class, 'callback'])->name('auth-google-callback');

Route::get('/', Web\HomeController::class)->name('home');
Route::controller(Web\BeritaController::class)->group(function() {
    Route::get('/berita', 'index')->name('berita');
    Route::get('/berita/{slug}', 'show')->name('berita.show');
});

Route::controller(Web\KategoriController::class)->group(function () {
    Route::get('/kategori', 'index')->name('kategori.index');
    Route::get('/kategori/{slug}', 'show')->name('kategori.show');
});

Route::controller(Web\HalamanController::class)->group(function () {
    Route::get('/halaman', 'index')->name('kontak');
    Route::get('/halaman/{slug}', 'show')->name('halaman.show');
});

Route::get('/redaksi', Web\RedaksiController::class)->name('redaksi');
Route::get('/tentang-kami', Web\TentangKamiController::class)->name('tentang-kami');

//module route cms
require __DIR__ . '/cms.php';

//route untuk menampilkan asset file
Route::get('stream/{path}/{filename}', Web\StreamController::class)->name('stream');

//route token fcm
Route::post('/fcm_token/store', [Web\FcmController::class, 'store']);