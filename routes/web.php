<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function () {
    return view('about');
})->name('about');

Route::get('/kepengurusan', function () {
    return view('kepengurusan');
})->name('kepengurusan');

Route::get('/program-kerja', function () {
    return view('program-kerja');
})->name('program_kerja');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/dokumen', function () {
    return view('dokumen');
})->name('dokumen');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    return redirect()->route('home')->with('success', 'Selamat datang kembali di Portal PW PII Banten!');
});