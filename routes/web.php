<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimaController;

// Halaman Utama (Landing Page)
Route::get('/', function () {
    return view('home');
});

// Halaman Struktur Kepengurusan
Route::get('/kepengurusan', function () {
    return view('kepengurusan');
});

// Sistem Informasi Manajemen Anggota (SIMA)
Route::get('/login', [SimaController::class, 'showLogin'])->name('sima.login');
Route::post('/login', [SimaController::class, 'processLogin'])->name('sima.login.post');

Route::prefix('sima')->group(function () {
    Route::get('/login', [SimaController::class, 'showLogin'])->name('sima.login.alt');
    Route::get('/logout', [SimaController::class, 'logout'])->name('sima.logout');
    Route::get('/dashboard', [SimaController::class, 'dashboard'])->name('sima.dashboard');

    // Aksi Kader
    Route::post('/surat-kader', [SimaController::class, 'storeSuratKader'])->name('sima.surat.kader');
    Route::get('/cetak-kta', [SimaController::class, 'cetakKta'])->name('sima.cetak.kta');
    Route::get('/cetak-surat/{id}', [SimaController::class, 'cetakSurat'])->name('sima.cetak.surat');

    // Aksi Pengurus Daerah
    Route::post('/surat-daerah', [SimaController::class, 'storeSuratDaerah'])->name('sima.surat.daerah');
    Route::post('/laporan-daerah', [SimaController::class, 'storeLaporanDaerah'])->name('sima.laporan.daerah');
    Route::get('/laporan-daerah/delete/{id}', [SimaController::class, 'deleteLaporanDaerah'])->name('sima.laporan.delete');

    // Aksi Artikel
    Route::post('/artikel', [SimaController::class, 'storeArticle'])->name('sima.artikel.store');
    Route::get('/artikel/delete/{id}', [SimaController::class, 'deleteArticle'])->name('sima.artikel.delete');
});