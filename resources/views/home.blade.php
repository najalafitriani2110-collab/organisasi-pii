@extends('layouts.app')

@section('title', 'Halaman Muka - PW PII Banten')

@section('content')
<!-- Notifikasi Sukses Login -->
@if(session('success'))
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
    <div class="bg-emerald-600 text-white font-semibold px-6 py-4 rounded-2xl shadow-lg flex items-center justify-between border border-emerald-400">
        <div class="flex items-center gap-3">
            <span class="text-xl">🎉</span>
            <span>{{ session('success') }}</span>
        </div>
        <span class="text-xs bg-emerald-500/50 px-3 py-1 rounded-full font-bold uppercase tracking-wider">Sesi Aktif</span>
    </div>
</div>
@endif

<!-- Hero Section Modern & Elegan -->
<div class="relative bg-gradient-to-br from-sky-600 via-sky-500 to-cyan-500 text-white py-24 overflow-hidden shadow-xl">
    <!-- Efek Cahaya Latar Belakang -->
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-white/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-sky-400/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="bg-white/15 text-white text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full border border-white/30 backdrop-blur-md inline-block mb-6 shadow-sm">
            ✨ Pengurus Wilayah Pelajar Islam Indonesia Banten
        </span>
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight tracking-tight">
            Membangun Generasi Cendekia, <br class="hidden sm:inline"> Berakhlak & Memimpin Bangsa
        </h1>
        <p class="text-lg md:text-xl text-sky-100 max-w-3xl mx-auto mb-10 font-medium leading-relaxed">
            Portal resmi koordinasi, kaderisasi, dan pusat informasi gerakan pelajar Islam di seluruh wilayah Provinsi Banten.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('about') }}" class="bg-white text-sky-700 font-bold px-8 py-4 rounded-2xl shadow-lg hover:bg-sky-50 transition transform hover:-translate-y-0.5">
                Kenali PII Banten
            </a>
            <a href="{{ route('login') }}" class="bg-sky-700/50 hover:bg-sky-700 text-white font-bold px-8 py-4 rounded-2xl backdrop-blur-md transition border border-white/30 shadow-lg transform hover:-translate-y-0.5">
                Masuk Portal Kader
            </a>
        </div>
    </div>
</div>

<!-- Statistik / Quick Info Bar -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 relative z-20">
    <div class="bg-white rounded-2xl shadow-xl border border-sky-100 grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-sky-100 p-6 text-center">
        <div class="py-4 md:py-0">
            <h3 class="text-3xl font-extrabold text-sky-600">8+</h3>
            <p class="text-sm font-semibold text-gray-500 mt-1">Pengurus Daerah (PD)</p>
        </div>
        <div class="py-4 md:py-0">
            <h3 class="text-3xl font-extrabold text-sky-600">1000+</h3>
            <p class="text-sm font-semibold text-gray-500 mt-1">Kader & Alumni Banten</p>
        </div>
        <div class="py-4 md:py-0">
            <h3 class="text-3xl font-extrabold text-sky-600">3 Pilar</h3>
            <p class="text-sm font-semibold text-gray-500 mt-1">Berilmu, Beramal, Berjuang</p>
        </div>
    </div>
</div>

<!-- Fokus Gerakan Cards -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="text-center mb-14">
        <h2 class="text-3xl md:text-4xl font-extrabold text-sky-950">Fokus Gerakan & Layanan</h2>
        <p class="text-sky-600 font-medium mt-2 text-lg">Komitmen nyata pembinaan pelajar di Tanah Jawara</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="bg-white p-8 rounded-3xl shadow-sm border border-sky-100 hover:shadow-xl hover:border-sky-300 transition group">
            <div class="w-14 h-14 bg-sky-50 text-sky-600 rounded-2xl flex items-center justify-center font-bold text-2xl mb-6 group-hover:bg-sky-500 group-hover:text-white transition shadow-sm">
                📖
            </div>
            <h3 class="font-bold text-xl mb-3 text-sky-950">Kaderisasi & Training</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Penyelenggaraan Leadership Basic Training (LBT) dan Intermediate Training secara berkala untuk membentuk jiwa kepemimpinan islami.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-8 rounded-3xl shadow-sm border border-sky-100 hover:shadow-xl hover:border-sky-300 transition group">
            <div class="w-14 h-14 bg-sky-50 text-sky-600 rounded-2xl flex items-center justify-center font-bold text-2xl mb-6 group-hover:bg-sky-500 group-hover:text-white transition shadow-sm">
                📰
            </div>
            <h3 class="font-bold text-xl mb-3 text-sky-950">Kabar & Berita Terkini</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Informasi transparan seputar agenda kegiatan, aksi sosial, dan dinamika perjuangan Pengurus Wilayah serta Daerah se-Banten.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-8 rounded-3xl shadow-sm border border-sky-100 hover:shadow-xl hover:border-sky-300 transition group">
            <div class="w-14 h-14 bg-sky-50 text-sky-600 rounded-2xl flex items-center justify-center font-bold text-2xl mb-6 group-hover:bg-sky-500 group-hover:text-white transition shadow-sm">
                📂
            </div>
            <h3 class="font-bold text-xl mb-3 text-sky-950">Pusat Dokumen & Arsip</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Akses unduh modul materi training, pedoman organisasi, arsip keputusan, dan administrasi keanggotaan terpusat.
            </p>
        </div>
    </div>
</div>
@endsection