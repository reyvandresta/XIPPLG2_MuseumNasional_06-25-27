<?php

use App\Http\Controllers\KoleksiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\VirtualTourController;
use App\Http\Controllers\BeritaController; // Ubah dari beritaTourController menjadi BeritaController

Route::get('/', function () {
    return view('welcome');
});

Route::get('/virtualtour', [VirtualTourController::class, 'virtualtour'])->name('virtualtour');

Route::get('/berita', [BeritaController::class, 'berita'])->name('berita'); // Ubah dari beritaController menjadi BeritaController

Route::get('/index', [KoleksiController::class, 'index'])->name('home');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/koleksi', function () {
    return view('koleksi');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});