<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index');
});
Route::get('/kunjungan', function () {
    return view('kunjungan');
});
Route::get('/virtualtour', function () {
    return view('virtualtour');
});
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


Route::get('/index', [homeController::class, 'index'])->name('index');