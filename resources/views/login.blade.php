@extends('layouts.app')

@section('title', 'Login Anggota - PII')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-sm border border-sky-100">
        <div class="text-center mb-8">
            <div class="w-12 h-12 bg-sky-100 text-sky-500 font-extrabold text-xl rounded-xl flex items-center justify-center mx-auto mb-3">
                PII
            </div>
            <h2 class="text-2xl font-bold text-sky-950">Masuk ke Portal PII</h2>
            <p class="text-sm text-sky-600 mt-1">Masukkan email dan kata sandi anggota</p>
        </div>

        <form action="{{ route('login') }}" method="POST" class="space-y-5">
            @csrf <!-- Wajib ada ini di setiap form POST Laravel -->

            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email / ID Anggota</label>
                <input type="email" id="email" name="email" required placeholder="kader@pii.or.id" 
                    class="w-full px-4 py-2.5 rounded-xl border border-sky-200 focus:ring-2 focus:ring-sky-400 focus:border-sky-400 outline-none transition text-sm">
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold text-gray-700 mb-1">Kata Sandi</label>
                <input type="password" id="password" name="password" required placeholder="••••••••" 
                    class="w-full px-4 py-2.5 rounded-xl border border-sky-200 focus:ring-2 focus:ring-sky-400 focus:border-sky-400 outline-none transition text-sm">
            </div>

            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center text-gray-600 cursor-pointer">
                    <input type="checkbox" class="rounded text-sky-500 focus:ring-sky-400 border-sky-300 mr-2"> Ingat saya
                </label>
                <a href="#" class="text-sky-600 font-semibold hover:underline">Lupa password?</a>
            </div>

            <button type="submit" class="w-full bg-sky-500 hover:bg-sky-600 text-white font-bold py-3 rounded-xl shadow-sm transition">
                Masuk Sekarang
            </button>
        </form>
    </div>
</div>
@endsection