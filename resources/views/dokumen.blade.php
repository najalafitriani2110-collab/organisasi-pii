@extends('layouts.app')

@section('title', 'Pusat Informasi & Dokumen - PW PII Banten')

@section('content')
<div class="bg-gradient-to-r from-sky-500 to-cyan-600 text-white py-14">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-3xl md:text-4xl font-extrabold">Pusat Informasi & Dokumen</h1>
        <p class="text-sky-100 mt-2 font-medium">Unduh berkas resmi, arsip, dan modul materi PII Banten</p>
    </div>
</div>

<div class="max-w-5xl mx-auto px-4 py-12">
    <div class="bg-white rounded-2xl shadow-sm border border-sky-100 divide-y divide-sky-100">
        <!-- Item 1 -->
        <div class="p-6 flex items-center justify-between hover:bg-sky-50/50 transition">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-sky-100 text-sky-600 rounded-xl flex items-center justify-center font-bold text-xl">
                    📄
                </div>
                <div>
                    <h4 class="font-bold text-sky-950 text-base">Modul Orientasi & Panduan Training Kader PII</h4>
                    <p class="text-xs text-gray-500 mt-0.5">PDF • 2.4 MB • Diperbarui 2026</p>
                </div>
            </div>
            <a href="#" class="bg-sky-500 hover:bg-sky-600 text-white text-xs font-bold px-4 py-2 rounded-xl transition">
                Unduh
            </a>
        </div>

        <!-- Item 2 -->
        <div class="p-6 flex items-center justify-between hover:bg-sky-50/50 transition">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-sky-100 text-sky-600 rounded-xl flex items-center justify-center font-bold text-xl">
                    📑
                </div>
                <div>
                    <h4 class="font-bold text-sky-950 text-base">Formulir Pendaftaran Training Kader (LBT)</h4>
                    <p class="text-xs text-gray-500 mt-0.5">DOCX • 500 KB</p>
                </div>
            </div>
            <a href="#" class="bg-sky-500 hover:bg-sky-600 text-white text-xs font-bold px-4 py-2 rounded-xl transition">
                Unduh
            </a>
        </div>

        <!-- Item 3 -->
        <div class="p-6 flex items-center justify-between hover:bg-sky-50/50 transition">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-sky-100 text-sky-600 rounded-xl flex items-center justify-center font-bold text-xl">
                    📘
                </div>
                <div>
                    <h4 class="font-bold text-sky-950 text-base">Pedoman Administrasi & Keorganisasian PW PII Banten</h4>
                    <p class="text-xs text-gray-500 mt-0.5">PDF • 4.1 MB</p>
                </div>
            </div>
            <a href="#" class="bg-sky-500 hover:bg-sky-600 text-white text-xs font-bold px-4 py-2 rounded-xl transition">
                Unduh
            </a>
        </div>
    </div>
</div>
@endsection