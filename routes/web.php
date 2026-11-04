<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - PW PII Banten
|--------------------------------------------------------------------------
*/

// Halaman Utama / Landing Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Halaman Login (Tampilan & Submit)
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    return redirect()->route('dashboard');
});

// Halaman Dashboard (Tampilan & Submit Form Administrasi / Laporan)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/dashboard', function () {
    // Kembali ke dashboard setelah submit form pengajuan surat / laporan kaderisasi
    return redirect()->route('dashboard')->with('success', 'Form berhasil dikirim!');
});

// Halaman Publik Lainnya
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/dokumen', function () {
    return view('dokumen');
})->name('dokumen');

Route::get('/kepengurusan', function () {
    return view('kepengurusan');
})->name('kepengurusan');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/program-kerja', function () {
    return view('program_kerja');
})->name('program_kerja');