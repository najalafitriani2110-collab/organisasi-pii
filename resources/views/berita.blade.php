@extends('layouts.app')

@section('title', 'Berita & Kegiatan - PW PII Banten')

@section('content')
<div class="bg-gradient-to-r from-sky-500 to-cyan-600 text-white py-14">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-3xl md:text-4xl font-extrabold">Kabar & Berita Terkini</h1>
        <p class="text-sky-100 mt-2 font-medium">Informasi agenda kegiatan dan pergerakan PW PII Banten</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Artikel 1 -->
        <div class="bg-white rounded-2xl shadow-sm border border-sky-100 overflow-hidden hover:shadow-md transition">
            <div class="bg-sky-100 h-48 flex items-center justify-center text-sky-500 text-4xl font-bold">
                📸
            </div>
            <div class="p-6">
                <span class="text-xs font-bold text-sky-600 bg-sky-50 px-3 py-1 rounded-full border border-sky-100">Kaderisasi</span>
                <h3 class="font-bold text-lg text-sky-950 mt-3 mb-2 hover:text-sky-600 cursor-pointer">Pelaksanaan Leadership Basic Training (LBT) Serentak se-Banten</h3>
                <p class="text-gray-600 text-xs leading-relaxed mb-4">Pengurus Wilayah PII Banten sukses menggelar pembinaan kader tingkat dasar untuk ratusan pelajar sekolah...</p>
                <div class="text-xs text-gray-400 font-medium">Banten • 12 Oktober 2026</div>
            </div>
        </div>

        <!-- Artikel 2 -->
        <div class="bg-white rounded-2xl shadow-sm border border-sky-100 overflow-hidden hover:shadow-md transition">
            <div class="bg-sky-100 h-48 flex items-center justify-center text-sky-500 text-4xl font-bold">
                📢
            </div>
            <div class="p-6">
                <span class="text-xs font-bold text-sky-600 bg-sky-50 px-3 py-1 rounded-full border border-sky-100">Silaturahmi</span>
                <h3 class="font-bold text-lg text-sky-950 mt-3 mb-2 hover:text-sky-600 cursor-pointer">Audiensi Bersama Tokoh Pendidikan & Kebudayaan Banten</h3>
                <p class="text-gray-600 text-xs leading-relaxed mb-4">Membahas sinergi program penguatan karakter islami dan literasi digital pelajar di daerah Banten...</p>
                <div class="text-xs text-gray-400 font-medium">Serang • 28 September 2026</div>
            </div>
        </div>

        <!-- Artikel 3 -->
        <div class="bg-white rounded-2xl shadow-sm border border-sky-100 overflow-hidden hover:shadow-md transition">
            <div class="bg-sky-100 h-48 flex items-center justify-center text-sky-500 text-4xl font-bold">
                🌱
            </div>
            <div class="p-6">
                <span class="text-xs font-bold text-sky-600 bg-sky-50 px-3 py-1 rounded-full border border-sky-100">Aksi Sosial</span>
                <h3 class="font-bold text-lg text-sky-950 mt-3 mb-2 hover:text-sky-600 cursor-pointer">Aksi Peduli Pelajar & Bakti Masyarakat Pelajar PII</h3>
                <p class="text-gray-600 text-xs leading-relaxed mb-4">Kader-kader PII Banten mendistribusikan bantuan alat tulis dan pelatihan kepemimpinan singkat...</p>
                <div class="text-xs text-gray-400 font-medium">Pandeglang • 15 Agustus 2026</div>
            </div>
        </div>
    </div>
</div>
@endsection