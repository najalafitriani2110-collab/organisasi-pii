<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW PII Banten - Pelajar Islam Indonesia</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <!-- Navbar -->
    <nav class="bg-blue-950 text-white sticky top-0 z-50 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <!-- Placeholder Logo PII -->
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center font-bold text-blue-950 shadow">
                    PII
                </div>
                <div>
                    <span class="font-bold text-lg tracking-wide block">PW PII BANTEN</span>
                    <span class="text-xs text-blue-200">Pelajar Islam Indonesia</span>
                </div>
            </div>
            <div class="hidden lg:flex space-x-6 font-medium text-sm">
                <a href="#beranda" class="hover:text-blue-300 transition">Beranda</a>
                <a href="#tentang" class="hover:text-blue-300 transition">Tentang Kami</a>
                <a href="/kepengurusan" class="hover:text-blue-300 transition">Struktur Kepengurusan</a>
                <a href="/dashboard" class="hover:text-blue-300 transition">Kaderisasi</a>
                <a href="#kontak" class="hover:text-blue-300 transition">Kontak</a>
            </div>
            <div>
                <a href="/login" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg text-sm font-semibold shadow transition">
                    Login SIMA
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="bg-gradient-to-br from-blue-950 via-blue-900 to-indigo-950 text-white py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="bg-blue-800 text-blue-200 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">Official Website</span>
                <h1 class="text-4xl sm:text-5xl font-extrabold mt-4 leading-tight">
                    Menumbuhkan Kader Pelajar Islam yang <span class="text-blue-400">Ulama, Cendekia, dan Pemimpin</span>
                </h1>
                <p class="mt-4 text-blue-100 text-lg leading-relaxed">
                    Selamat datang di portal resmi Pimpinan Wilayah Pelajar Islam Indonesia (PW PII) Banten. Pusat informasi kaderisasi, layanan administrasi digital, dan basis pergerakan pelajar.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="#tentang" class="bg-white text-blue-950 hover:bg-blue-50 font-bold px-6 py-3 rounded-xl shadow transition">
                        Jelajahi Profil
                    </a>
                    <a href="/login" class="border border-blue-400 hover:bg-blue-900 text-white font-bold px-6 py-3 rounded-xl transition">
                        Akses Layanan Anggota
                    </a>
                </div>
            </div>
            <div class="flex justify-center">
                <!-- Placeholder Foto Kegiatan / Tokoh -->
                <div class="w-full max-w-md h-80 bg-blue-900/50 border-2 border-blue-400/30 rounded-2xl flex flex-col items-center justify-center text-center p-6 shadow-2xl relative overflow-hidden">
                    <div class="absolute inset-0 bg-blue-900/20 backdrop-blur-sm"></div>
                    <div class="relative z-10">
                        <div class="w-20 h-20 bg-blue-600 rounded-full mx-auto flex items-center justify-center text-2xl font-bold mb-4 shadow">
                            PII
                        </div>
                        <h3 class="text-xl font-bold">Dokumentasi & Galeri</h3>
                        <p class="text-sm text-blue-200 mt-2">Ruang ekspresi dan rekam jejak kegiatan pengurus wilayah Banten.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi & Misi -->
    <section id="tentang" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-3xl font-extrabold text-blue-950">Visi & Misi PW PII Banten</h2>
                <p class="text-slate-600 mt-2">Landasan gerak dan arah perjuangan organisasi dalam membina pelajar.</p>
            </div>
            <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Visi -->
                <div class="bg-slate-50 border border-slate-200 p-8 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-blue-950 text-white rounded-xl flex items-center justify-center font-bold text-xl mb-6">V</div>
                    <h3 class="text-xl font-bold text-blue-950 mb-3">Visi Organisasi</h3>
                    <p class="text-slate-700 leading-relaxed">
                        Terwujudnya kesempurnaan pendidikan dan kebudayaan umat Islam sehingga tercapai masyarakat yang adil dan makmur yang diridhai Allah SWT.
                    </p>
                </div>
                <!-- Misi -->
                <div class="bg-slate-50 border border-slate-200 p-8 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-blue-950 text-white rounded-xl flex items-center justify-center font-bold text-xl mb-6">M</div>
                    <h3 class="text-xl font-bold text-blue-950 mb-3">Misi Organisasi</h3>
                    <ul class="text-slate-700 space-y-2 text-sm leading-relaxed">
                        <li>1. Membina dan mengembangkan kepribadian pelajar Islam Indonesia.</li>
                        <li>2. Menegakkan ajaran Islam dalam kehidupan sehari-hari di lingkungan pelajar.</li>
                        <li>3. Membela hak-hak dan kepentingan pelajar demi masa depan bangsa.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Struktur Organisasi Preview (Ringkasan Inti) -->
    <section id="struktur" class="py-20 bg-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="bg-blue-100 text-blue-900 text-xs font-bold px-3 py-1 rounded-full uppercase">Pimpinan Wilayah</span>
            <h2 class="text-3xl font-extrabold text-blue-950 mt-2">Struktur Kepengurusan</h2>
            <p class="text-slate-600 mt-2">Pimpinan Wilayah Pelajar Islam Indonesia Provinsi Banten Periode Berjalan.</p>
            
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card Pengurus 1: Ketua Umum -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 text-center relative overflow-hidden">
                    <div class="w-full h-2 bg-blue-950 absolute top-0 left-0"></div>
                    <div class="w-20 h-20 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center text-blue-900 font-bold text-sm">FOTO</div>
                    <h4 class="font-bold text-base text-blue-950">MOHAMMAD ROYHAN DAESTAKI</h4>
                    <p class="text-xs font-bold text-blue-600 uppercase mt-1">Ketua Umum</p>
                </div>
                <!-- Card Pengurus 2: Sekretaris Umum -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 text-center relative overflow-hidden">
                    <div class="w-full h-2 bg-blue-800 absolute top-0 left-0"></div>
                    <div class="w-20 h-20 bg-blue-50 rounded-full mx-auto mb-4 flex items-center justify-center text-blue-900 font-bold text-sm">FOTO</div>
                    <h4 class="font-bold text-base text-blue-950">Ihya Ulumudin</h4>
                    <p class="text-xs font-bold text-blue-600 uppercase mt-1">Sekretaris Umum</p>
                </div>
                <!-- Card Pengurus 3: Bendahara Umum -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 text-center relative overflow-hidden">
                    <div class="w-full h-2 bg-emerald-600 absolute top-0 left-0"></div>
                    <div class="w-20 h-20 bg-emerald-50 rounded-full mx-auto mb-4 flex items-center justify-center text-emerald-900 font-bold text-sm">FOTO</div>
                    <h4 class="font-bold text-base text-blue-950">Aldi Aryanto Pratama</h4>
                    <p class="text-xs font-bold text-emerald-600 uppercase mt-1">Bendahara Umum</p>
                </div>
            </div>

            <!-- Tombol Menuju Halaman Struktur Lengkap -->
            <div class="mt-10">
                <a href="/kepengurusan" class="inline-block bg-blue-950 hover:bg-blue-900 text-white font-bold px-8 py-3.5 rounded-xl text-xs shadow-lg transition">
                    Lihat Struktur Lengkap, Ketua Bidang & Departemen &rarr;
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak" class="bg-blue-950 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="font-bold text-lg mb-3">PW PII Banten</h3>
                <p class="text-sm text-blue-200 leading-relaxed">
                    Wadah resmi pengkaderan dan perjuangan pelajar Islam di wilayah Provinsi Banten.
                </p>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-3">Tautan Cepat</h3>
                <ul class="text-sm text-blue-200 space-y-2">
                    <li><a href="#beranda" class="hover:text-white transition">Beranda</a></li>
                    <li><a href="#tentang" class="hover:text-white transition">Tentang Kami</a></li>
                    <li><a href="/kepengurusan" class="hover:text-white transition">Struktur Organisasi Lengkap</a></li>
                    <li><a href="/login" class="hover:text-white transition">Login SIMA (Administrasi)</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-3">Sekretariat</h3>
                <p class="text-sm text-blue-200 leading-relaxed">
                    Provinsi Banten, Indonesia.<br>
                    Email: info@piibanten.or.id
                </p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12 pt-6 border-t border-blue-900 text-center text-xs text-blue-300">
            &copy; 2026 PW PII Banten. All rights reserved. Developed with Laravel.
        </div>
    </footer>

</body>
</html>