<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Kepengurusan - PW PII Banten</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <!-- Navbar -->
    <nav class="bg-blue-950 text-white sticky top-0 z-50 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center font-bold text-blue-950 shadow">PII</div>
                <div>
                    <span class="font-bold text-lg tracking-wide block">PW PII BANTEN</span>
                    <span class="text-xs text-blue-200">Pelajar Islam Indonesia</span>
                </div>
            </div>
            <div class="hidden lg:flex space-x-6 font-medium text-sm">
                <a href="/" class="hover:text-blue-300 transition">Beranda</a>
                <a href="/kepengurusan" class="text-blue-400 font-bold">Struktur</a>
                <a href="/dashboard" class="hover:text-blue-300 transition">Kaderisasi</a>
                <a href="/kontak" class="hover:text-blue-300 transition">Kontak</a>
            </div>
            <a href="/login" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition">Login SIMA</a>
        </div>
    </nav>

    <!-- Header Section -->
    <section class="bg-gradient-to-r from-blue-950 to-indigo-900 text-white py-16 text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-3xl sm:text-4xl font-extrabold">Struktur Kepengurusan</h1>
            <p class="text-blue-200 mt-2 text-sm sm:text-base">Pimpinan Wilayah Pelajar Islam Indonesia (PW PII) Banten Periode Berjalan</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-16">

        <!-- 1. Ketua Umum (Puncak Hirarki) -->
        <div>
            <div class="text-center mb-10">
                <span class="bg-blue-100 text-blue-900 text-xs font-bold px-3 py-1 rounded-full uppercase">Pimpinan Tertinggi</span>
                <h2 class="text-2xl font-bold text-blue-950 mt-2">Ketua Umum PW PII Banten</h2>
            </div>

            <div class="max-w-md mx-auto">
                <div class="bg-white rounded-2xl p-8 border border-slate-200 shadow-md text-center relative overflow-hidden">
                    <div class="w-full h-2 bg-blue-950 absolute top-0 left-0"></div>
                    <div class="w-28 h-28 bg-blue-100 border-2 border-blue-950 rounded-full mx-auto mb-4 flex items-center justify-center text-blue-950 font-bold text-xl shadow-inner">FOTO</div>
                    <h3 class="font-extrabold text-xl text-blue-950">MOHAMMAD ROYHAN DAESTAKI</h3>
                    <p class="text-xs font-bold text-blue-600 uppercase tracking-wider mt-1">Ketua Umum</p>
                    <p class="text-xs text-slate-500 mt-3">Penanggung jawab utama arah gerak, kebijakan, dan kepemimpinan organisasi wilayah PII Banten.</p>
                </div>
            </div>
        </div>

        <!-- 2. Sekretaris Umum & Bendahara Umum -->
        <div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Sekretaris Umum -->
                <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm text-center relative overflow-hidden">
                    <div class="w-full h-2 bg-blue-800 absolute top-0 left-0"></div>
                    <div class="w-20 h-20 bg-blue-50 border border-blue-200 rounded-full mx-auto mb-3 flex items-center justify-center text-blue-900 font-bold">FOTO</div>
                    <h3 class="font-bold text-lg text-blue-950">Ihya Ulumudin</h3>
                    <p class="text-xs font-semibold text-blue-600 uppercase mt-1">Sekretaris Umum</p>
                    <p class="text-xs text-slate-500 mt-2">Koordinator administrasi, kesekretariatan, dan tata kelola persuratan.</p>
                </div>

                <!-- Bendahara Umum -->
                <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm text-center relative overflow-hidden">
                    <div class="w-full h-2 bg-emerald-600 absolute top-0 left-0"></div>
                    <div class="w-20 h-20 bg-emerald-50 border border-emerald-200 rounded-full mx-auto mb-3 flex items-center justify-center text-emerald-900 font-bold">FOTO</div>
                    <h3 class="font-bold text-lg text-blue-950">Aldi Aryanto Pratama</h3>
                    <p class="text-xs font-semibold text-emerald-600 uppercase mt-1">Bendahara Umum</p>
                    <p class="text-xs text-slate-500 mt-2">Pengelola anggaran, keuangan, dan kemandirian usaha organisasi.</p>
                </div>
            </div>
        </div>

        <!-- 3. Para Ketua Bidang (I sampai IV) -->
        <div>
            <div class="text-center mb-10">
                <span class="bg-slate-200 text-slate-700 text-xs font-bold px-3 py-1 rounded-full uppercase">Bidang Operasional</span>
                <h2 class="text-2xl font-bold text-blue-950 mt-2">Susunan Ketua Bidang</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Ketua I -->
                <div class="bg-white rounded-xl p-5 border border-slate-200 text-center shadow-sm">
                    <div class="w-16 h-16 bg-slate-100 rounded-full mx-auto mb-3 flex items-center justify-center font-bold text-xs text-slate-500">FOTO</div>
                    <h4 class="font-bold text-sm text-blue-950">Mahasyim</h4>
                    <p class="text-xs font-bold text-blue-600 mt-1">Ketua I – Kaderisasi</p>
                    <p class="text-[11px] text-slate-500 mt-2">Pengembangan kurikulum dan pengkaderan berjenjang.</p>
                </div>

                <!-- Ketua II -->
                <div class="bg-white rounded-xl p-5 border border-slate-200 text-center shadow-sm">
                    <div class="w-16 h-16 bg-slate-100 rounded-full mx-auto mb-3 flex items-center justify-center font-bold text-xs text-slate-500">FOTO</div>
                    <h4 class="font-bold text-sm text-blue-950">Adriyah</h4>
                    <p class="text-xs font-bold text-blue-600 mt-1">Ketua II – PPO</p>
                    <p class="text-[11px] text-slate-500 mt-2">Pengembangan dan Pemberdayaan Organisasi Daerah.</p>
                </div>

                <!-- Ketua III -->
                <div class="bg-white rounded-xl p-5 border border-slate-200 text-center shadow-sm">
                    <div class="w-16 h-16 bg-slate-100 rounded-full mx-auto mb-3 flex items-center justify-center font-bold text-xs text-slate-500">FOTO</div>
                    <h4 class="font-bold text-sm text-blue-950">Adi Gustiadi</h4>
                    <p class="text-xs font-bold text-blue-600 mt-1">Ketua III – Komunikasi Umat</p>
                    <p class="text-[11px] text-slate-500 mt-2">Hubungan kemasyarakatan dan jaringan umat.</p>
                </div>

                <!-- Ketua IV -->
                <div class="bg-white rounded-xl p-5 border border-slate-200 text-center shadow-sm">
                    <div class="w-16 h-16 bg-slate-100 rounded-full mx-auto mb-3 flex items-center justify-center font-bold text-xs text-slate-500">FOTO</div>
                    <h4 class="font-bold text-sm text-blue-950">M. Firdausil Muttaqin</h4>
                    <p class="text-xs font-bold text-blue-600 mt-1">Ketua IV – Pemberdayaan Masyarakat Pelajar</p>
                    <span class="inline-block bg-red-100 text-red-700 text-[9px] font-bold px-2 py-0.5 rounded mt-1">Non-Aktif</span>
                    <p class="text-[11px] text-slate-500 mt-2">Advokasi dan pemberdayaan pelajar.</p>
                </div>
            </div>
        </div>

        <!-- 4. Departemen dan Badan Otonom -->
        <div>
            <div class="text-center mb-10">
                <span class="bg-slate-200 text-slate-700 text-xs font-bold px-3 py-1 rounded-full uppercase">Lembaga & Departemen</span>
                <h2 class="text-2xl font-bold text-blue-950 mt-2">Departemen & Badan Otonom</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-5 rounded-xl border border-slate-200 flex items-center space-x-4">
                    <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center font-bold text-xs text-blue-900">FOTO</div>
                    <div>
                        <h4 class="font-bold text-sm text-blue-950">Adyaksa Gaza Adzani</h4>
                        <p class="text-xs text-blue-600 font-medium">Departemen Pemberdayaan Daerah</p>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-xl border border-slate-200 flex items-center space-x-4">
                    <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center font-bold text-xs text-blue-900">FOTO</div>
                    <div>
                        <h4 class="font-bold text-sm text-blue-950">M Hakin Najili</h4>
                        <p class="text-xs text-blue-600 font-medium">Departemen Advokasi Pelajar</p>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-xl border border-slate-200 flex items-center space-x-4">
                    <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center font-bold text-xs text-blue-900">FOTO</div>
                    <div>
                        <h4 class="font-bold text-sm text-blue-950">Khofifah</h4>
                        <p class="text-xs text-blue-600 font-medium">Departemen Media dan Pers</p>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-xl border border-slate-200 flex items-center space-x-4">
                    <div class="w-12 h-12 bg-emerald-50 rounded-full flex items-center justify-center font-bold text-xs text-emerald-900">FOTO</div>
                    <div>
                        <h4 class="font-bold text-sm text-blue-950">Wandi</h4>
                        <p class="text-xs text-emerald-600 font-medium">Komandan Brigade PII</p>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-xl border border-slate-200 flex items-center space-x-4">
                    <div class="w-12 h-12 bg-pink-50 rounded-full flex items-center justify-center font-bold text-xs text-pink-700">FOTO</div>
                    <div>
                        <h4 class="font-bold text-sm text-blue-950">Melisa</h4>
                        <p class="text-xs text-pink-600 font-medium">Ketua Korps PII Wati</p>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white py-8 text-center text-xs text-slate-400">
        &copy; 2026 PW PII Banten. Struktur Kepengurusan Resmi.
    </footer>

</body>
</html>