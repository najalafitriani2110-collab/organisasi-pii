@extends('layouts.app')

@section('title', 'Tentang Organisasi & Visi Misi - PII')

@section('content')
<div class="bg-sky-500 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-3xl md:text-4xl font-extrabold">Tentang Organisasi & Visi Misi</h1>
        <p class="text-sky-100 mt-2 font-medium">Mengenal Pelajar Islam Indonesia (PII) Lebih Dekat</p>
    </div>
</div>

<div class="max-w-5xl mx-auto px-4 py-12 space-y-10">

    <!-- Profil Singkat -->
    <section class="bg-white p-8 rounded-2xl shadow-sm border border-sky-100">
        <h2 class="text-2xl font-bold text-sky-900 mb-4 flex items-center gap-2">
            <span>🏛️</span> Sejarah & Profil Singkat
        </h2>
        <p class="text-gray-700 leading-relaxed mb-4">
            <strong>Pelajar Islam Indonesia (PII)</strong> adalah organisasi kader pelajar Islam tertua di Indonesia yang didirikan di Yogyakarta pada tanggal <strong>4 Mei 1947</strong>.
        </p>
        <p class="text-gray-700 leading-relaxed">
            PII hadir sebagai wadah pembinaan kepemimpinan dan intelektualitas pelajar Islam untuk menyiapkan calon-calon pemimpin bangsa yang bertaqwa, cakap, dan berwawasan luas.
        </p>
    </section>

    <!-- Visi & Misi -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Visi -->
        <div class="bg-sky-50 border border-sky-200 p-8 rounded-2xl">
            <h2 class="text-xl font-bold text-sky-900 mb-3 flex items-center gap-2">
                <span>🎯</span> Visi Organisasi
            </h2>
            <p class="text-sky-800 font-semibold text-lg leading-relaxed">
                "Terwujudnya kesempurnaan pendidikan dan kebudayaan yang sesuai dengan Islam bagi segenap rakyat Indonesia."
            </p>
        </div>

        <!-- Misi -->
        <div class="bg-white border border-sky-100 p-8 rounded-2xl shadow-sm">
            <h2 class="text-xl font-bold text-sky-900 mb-3 flex items-center gap-2">
                <span>🚀</span> Misi Perjuangan
            </h2>
            <ul class="space-y-3 text-gray-700 text-sm">
                <li class="flex items-start gap-2">
                    <span class="text-sky-500 font-bold">✓</span>
                    <span>Menyelenggarakan kaderisasi kepemimpinan bagi pelajar Islam.</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-sky-500 font-bold">✓</span>
                    <span>Meningkatkan mutu pendidikan dan potensi intelektual pelajar.</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-sky-500 font-bold">✓</span>
                    <span>Menggalang ukhuwah islamiyah antar sesama elemen kepelajaran.</span>
                </li>
            </ul>
        </div>
    </section>

</div>
@endsection