<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kader - PW PII Banten</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-slate-100 text-slate-800 antialiased">

    <!-- Header / Navbar Dashboard -->
    <header class="bg-blue-950 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center font-bold text-blue-950 text-xs shadow">PII</div>
                <span class="font-bold tracking-wide text-sm sm:text-base">SIMA PW PII BANTEN</span>
            </div>
            <div class="flex items-center space-x-4 text-sm font-medium">
                <span class="hidden sm:inline">Halo, <strong class="text-blue-300">Kader PII Banten</strong></span>
                <a href="/login" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded-lg text-xs font-semibold transition">Logout</a>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Pesan Notifikasi Sukses Jika Ada -->
        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-100 border border-emerald-300 text-emerald-800 text-sm rounded-xl flex items-center justify-between">
                <span>{{ session('success') }}</span>
                <button onclick="this.parentElement.remove()" class="font-bold text-emerald-900">&times;</button>
            </div>
        @endif

        <div class="mb-8">
            <h1 class="text-2xl font-bold text-blue-950">Dashboard Layanan Anggota</h1>
            <p class="text-sm text-slate-500">Kelola identitas digital dan pengajuan administrasi kamu di sini.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Kolom Kiri: Kartu Tanda Anggota (KTA) Digital -->
            <div class="lg:col-span-1">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                    <h2 class="text-lg font-bold text-blue-950 mb-4 flex items-center gap-2">
                        <span>🪪</span> KTA Digital
                    </h2>

                    <!-- Visual Kartu KTA -->
                    <div class="bg-gradient-to-br from-blue-950 via-blue-900 to-indigo-950 text-white rounded-xl p-5 shadow-lg relative overflow-hidden">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-[10px] uppercase text-blue-300 font-bold tracking-widest">PW PII Banten</p>
                                <p class="text-xs font-semibold">Kartu Tanda Anggota</p>
                            </div>
                            <div class="w-7 h-7 bg-white text-blue-950 rounded-full flex items-center justify-center font-extrabold text-[10px]">PII</div>
                        </div>

                        <div class="flex items-center space-x-4 my-3">
                            <div class="w-14 h-18 bg-blue-800 rounded-md flex items-center justify-center border border-blue-400/40 text-xs text-blue-200 font-semibold">
                                Foto
                            </div>
                            <div>
                                <h3 class="font-bold text-sm">Najala Fitriani</h3>
                                <p class="text-[11px] text-blue-200">NIA: 36.03.2026.01210</p>
                                <p class="text-[10px] text-blue-300 mt-1">PD PII Tangerang Selatan</p>
                            </div>
                        </div>

                        <div class="pt-3 border-t border-blue-800/80 flex justify-between items-center text-[9px] text-blue-200">
                            <span>Status: Aktif</span>
                            <span class="bg-blue-600 px-2 py-0.5 rounded text-white font-semibold">Kader Utama</span>
                        </div>
                    </div>

                    <button class="w-full mt-4 bg-blue-950 hover:bg-blue-900 text-white font-semibold py-2.5 rounded-xl text-xs shadow transition flex items-center justify-center gap-2">
                        <span>📥</span> Unduh KTA Digital (PDF)
                    </button>
                </div>
            </div>

            <!-- Kolom Kanan: Form Pengajuan Surat & Pelaporan -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- Fitur 1: Form Pengajuan Surat -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                    <h2 class="text-lg font-bold text-blue-950 mb-1 flex items-center gap-2">
                        <span>📄</span> Pengajuan Surat Keterangan Aktif
                    </h2>
                    <p class="text-xs text-slate-500 mb-6">Isi formulir ini untuk mendapatkan surat keterangan aktif organisasi secara instan.</p>

                    <form action="/dashboard" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-1">Nama Lengkap</label>
                                <input type="text" name="name" value="Najala Fitriani" readonly class="w-full px-3 py-2 bg-slate-100 rounded-lg border border-slate-300 text-xs font-medium">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-1">Nomor Induk Anggota (NIA)</label>
                                <input type="text" name="nia" value="36.03.2026.01210" readonly class="w-full px-3 py-2 bg-slate-100 rounded-lg border border-slate-300 text-xs font-medium">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-600 mb-1">Keperluan Pengajuan Surat</label>
                            <input type="text" name="purpose" required placeholder="Contoh: Persyaratan Beasiswa / Kampus / Kerja" class="w-full px-3 py-2 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-900 focus:outline-none text-xs">
                        </div>

                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded-xl text-xs shadow transition">
                            Kirim Pengajuan Surat
                        </button>
                    </form>
                </div>

                <!-- Fitur 2: Form Laporan Kaderisasi Daerah (Khusus PD/PC) -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                    <h2 class="text-lg font-bold text-blue-950 mb-1 flex items-center gap-2">
                        <span>📢</span> Pelaporan Kaderisasi Daerah (PD/PC)
                    </h2>
                    <p class="text-xs text-slate-500 mb-6">Unggah ringkasan kegiatan atau jumlah kader baru dari masing-masing daerah.</p>

                    <form action="/dashboard" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-1">Asal Daerah (PD/PC)</label>
                                <select name="region" class="w-full px-3 py-2 rounded-lg border border-slate-300 text-xs focus:ring-2 focus:ring-blue-900 focus:outline-none">
                                    <option value="PD PII Tangerang Selatan">PD PII Tangerang Selatan</option>
                                    <option value="PD PII Kota Serang">PD PII Kota Serang</option>
                                    <option value="PD PII Kabupaten Lebak">PD PII Kabupaten Lebak</option>
                                    <option value="PD PII Pandeglang">PD PII Pandeglang</option>
                                    <option value="PD PII Kabupaten Tangerang">PD PII Kabupaten Tangerang</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-1">Nama Kegiatan Kaderisasi</label>
                                <input type="text" name="activity_name" required placeholder="Contoh: Leadership Basic Training (LBT)" class="w-full px-3 py-2 rounded-lg border border-slate-300 text-xs focus:ring-2 focus:ring-blue-900 focus:outline-none">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-600 mb-1">Jumlah Peserta / Kader Baru</label>
                            <input type="number" name="total_participants" required placeholder="Contoh: 45" class="w-full px-3 py-2 rounded-lg border border-slate-300 text-xs focus:ring-2 focus:ring-blue-900 focus:outline-none">
                        </div>

                        <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold px-5 py-2.5 rounded-xl text-xs shadow transition">
                            Submit Laporan Kaderisasi
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </main>

</body>
</html>