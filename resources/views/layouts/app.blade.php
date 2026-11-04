<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PW PII Banten - Pelajar Islam Indonesia')</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-sky-50/50 text-gray-800 flex flex-col min-h-screen">

    <!-- Navigation Bar -->
    <nav class="bg-white border-b border-sky-100 shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex justify-between items-center relative z-50">
            <a href="{{ route('home') }}" class="font-bold text-lg md:text-xl tracking-wide flex items-center gap-2">
                <span class="bg-sky-500 text-white px-2 py-1 rounded-lg font-extrabold text-xs md:text-sm shadow-sm">PII</span>
                <span class="text-sky-950 font-extrabold">PW PII Banten</span>
            </a>
            
           <div class="hidden lg:flex space-x-5 text-sm font-semibold text-gray-600">
    <a href="{{ route('home') }}" class="hover:text-sky-600 transition">Halaman Muka</a>
    <a href="{{ route('about') }}" class="hover:text-sky-600 transition">Tentang Kami</a>
    <a href="{{ route('kepengurusan') }}" class="hover:text-sky-600 transition">Kepengurusan</a>
    <a href="{{ route('program_kerja') }}" class="hover:text-sky-600 transition">Program Kerja</a>
    <a href="{{ route('berita') }}" class="hover:text-sky-600 transition">Berita</a>
    <a href="{{ route('dokumen') }}" class="hover:text-sky-600 transition">Pusat Informasi & Dokumen</a>
    <a href="{{ route('kontak') }}" class="hover:text-sky-600 transition">Kontak</a>
</div>
            <div>
                <a href="{{ route('login') }}" class="bg-sky-500 hover:bg-sky-600 text-white text-xs md:text-sm font-bold px-4 py-2 rounded-xl transition shadow-sm hover:shadow relative z-50">
                    Login
                </a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-sky-950 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center text-sm text-sky-200/80">
            <p class="font-bold text-white mb-1">Pengurus Wilayah Pelajar Islam Indonesia (PW PII) Banten</p>
            <p>&copy; {{ date('Y') }} All Rights Reserved. Mengabdi untuk Islam dan Indonesia.</p>
        </div>
    </footer>

</body>
</html>