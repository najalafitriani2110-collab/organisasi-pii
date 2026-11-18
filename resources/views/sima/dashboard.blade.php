<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard SIMA - PW PII Banten</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-slate-100 text-slate-800 antialiased">

    <!-- Navbar -->
    <nav class="bg-blue-950 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center font-bold text-blue-950 shadow">PII</div>
                <div>
                    <span class="font-bold text-base tracking-wide block">SIMA PW PII BANTEN</span>
                    <span class="text-xs text-blue-200">Sistem Informasi Manajemen Anggota</span>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-bold">{{ $user['name'] }}</p>
                    <p class="text-xs text-blue-300">{{ $user['role_label'] }} ({{ $user['daerah'] }})</p>
                </div>
                <a href="{{ route('sima.logout') }}" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-xl text-xs font-bold transition shadow">
                    Keluar
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 space-y-8">

        @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-5 py-4 rounded-2xl text-sm font-semibold shadow-sm">
            {{ session('success') }}
        </div>
        @endif

        <!-- Banner Selamat Datang -->
        <div class="bg-gradient-to-r from-blue-950 to-blue-900 text-white p-8 rounded-3xl shadow-lg flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
            <div>
                <span class="bg-blue-800 text-blue-200 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">Akses Portal: {{ $user['role_label'] }}</span>
                <h1 class="text-2xl sm:text-3xl font-extrabold mt-2">Selamat Datang, {{ $user['name'] }}!</h1>
                <p class="text-blue-200 text-sm mt-1">Anda masuk di wilayah penugasan <strong class="text-white">{{ $user['daerah'] }}</strong>.</p>
            </div>

            <!-- Tombol Cepat Khusus Kader -->
            @if($user['role'] == 'kader')
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('sima.cetak.kta') }}" class="bg-white text-blue-950 hover:bg-blue-50 px-5 py-2.5 rounded-xl text-xs font-bold shadow transition">
                    🪪 Cetak KTA Digital
                </a>
                <a href="{{ route('sima.cetak.surat', 1) }}" class="bg-blue-600 hover:bg-blue-505 text-white px-5 py-2.5 rounded-xl text-xs font-bold shadow transition">
                    📄 Cetak Surat Aktif
                </a>
            </div>
            @endif
        </div>


        <!-- ================================================= -->
        <!-- FITUR KHUSUS AKUN KADER -->
        <!-- ================================================= -->
        @if($user['role'] == 'kader')
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Pengajuan Surat Keterangan Aktif -->
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200 space-y-4">
                <h3 class="font-extrabold text-blue-950 text-lg">Pengajuan Surat Keterangan Aktif</h3>
                <p class="text-xs text-slate-500">Ajukan surat keterangan aktif kader untuk keperluan akademik atau beasiswa.</p>
                <form action="{{ route('sima.surat.kader') }}" method="POST" class="space-y-3">
                    @csrf
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Keperluan Pembuatan Surat</label>
                        <input type="text" name="keperluan" required placeholder="Contoh: Syarat Beasiswa Kuliah" class="w-full border border-slate-300 rounded-xl px-4 py-2.5 text-sm">
                    </div>
                    <button type="submit" class="w-full bg-blue-950 hover:bg-blue-900 text-white py-2.5 rounded-xl text-xs font-bold transition">
                        Kirim Pengajuan Surat
                    </button>
                </form>

                <div class="mt-4 pt-4 border-t">
                    <h4 class="text-xs font-bold text-slate-700 mb-2">Riwayat Pengajuan Anda:</h4>
                    @foreach($surat_kader as $s)
                    <div class="bg-slate-50 p-3 rounded-xl flex justify-between items-center text-xs">
                        <div>
                            <p class="font-bold text-slate-800">{{ $s['keperluan'] }}</p>
                            <p class="text-slate-500">NRA: {{ $s['nra'] }}</p>
                        </div>
                        <span class="bg-emerald-100 text-emerald-800 px-2.5 py-1 rounded-full font-bold">{{ $s['status'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Publikasi Artikel Kader -->
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200 space-y-4">
                <h3 class="font-extrabold text-blue-950 text-lg">Tulis Opini / Artikel Pribadi</h3>
                <p class="text-xs text-slate-500">Publikasikan gagasan dan pemikiran kepelajarannya ke portal PW PII Banten.</p>
                <form action="{{ route('sima.artikel.store') }}" method="POST" class="space-y-3">
                    @csrf
                    <input type="text" name="judul" required placeholder="Judul Artikel..." class="w-full border border-slate-300 rounded-xl px-4 py-2.5 text-sm">
                    <textarea name="isi" rows="3" required placeholder="Tulis isi artikel..." class="w-full border border-slate-300 rounded-xl px-4 py-2.5 text-sm"></textarea>
                    <button type="submit" class="w-full bg-blue-950 hover:bg-blue-900 text-white py-2.5 rounded-xl text-xs font-bold transition">
                        Upload Artikel
                    </button>
                </form>
            </div>
        </div>
        @endif


        <!-- ================================================= -->
        <!-- FITUR KHUSUS PENGURUS DAERAH (PD) -->
        <!-- ================================================= -->
        @if($user['role'] == 'daerah')
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Pelaporan Kaderisasi Daerah -->
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200 space-y-4">
                <h3 class="font-extrabold text-blue-950 text-lg">Input Pelaporan Kaderisasi Daerah</h3>
                <p class="text-xs text-slate-500">Laporkan perkembangan pengkaderan (LBT / LIT) di wilayah daerah Anda.</p>
                <form action="{{ route('sima.laporan.daerah') }}" method="POST" class="space-y-3">
                    @csrf
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Periode Laporan</label>
                        <input type="text" name="periode" required placeholder="Contoh: Triwulan IV 2026" class="w-full border border-slate-300 rounded-xl px-4 py-2 text-sm">
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Jumlah Peserta LBT</label>
                            <input type="number" name="jumlah_lbt" required placeholder="45" class="w-full border border-slate-300 rounded-xl px-4 py-2 text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Jumlah Peserta LIT</label>
                            <input type="number" name="jumlah_lit" required placeholder="12" class="w-full border border-slate-300 rounded-xl px-4 py-2 text-sm">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Keterangan / Catatan Kegiatan</label>
                        <textarea name="keterangan" rows="2" required placeholder="Catatan perkembangan..." class="w-full border border-slate-300 rounded-xl px-4 py-2 text-sm"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-950 hover:bg-blue-900 text-white py-2.5 rounded-xl text-xs font-bold transition">
                        Simpan & Kirim Laporan
                    </button>
                </form>

                <!-- Riwayat Laporan Daerah yang Telah Dikirim -->
                <div class="mt-6 pt-6 border-t border-slate-100">
                    <h4 class="font-bold text-slate-800 text-sm mb-3">📋 Riwayat Laporan Daerah Anda:</h4>
                    <div class="space-y-3">
                        @foreach($laporan_daerah as $lap)
                            @if($lap['daerah'] == $user['daerah'])
                            <div class="bg-slate-50 border border-slate-200 p-4 rounded-2xl text-xs space-y-1">
                                <div class="flex justify-between font-bold text-blue-950">
                                    <span>Periode: {{ $lap['periode'] }}</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-0.5 rounded">Terkirim</span>
                                </div>
                                <p class="text-slate-600">Peserta LBT: <strong>{{ $lap['jumlah_lbt'] }} orang</strong> | Peserta LIT: <strong>{{ $lap['jumlah_lit'] }} orang</strong></p>
                                <p class="text-slate-500 italic">Keterangan: {{ $lap['keterangan'] }}</p>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Pengiriman Surat Resmi Daerah -->
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200 space-y-4">
                <h3 class="font-extrabold text-blue-950 text-lg">Administrasi Surat ke Pengurus Wilayah</h3>
                <p class="text-xs text-slate-500">Kirimkan permohonan surat resmi atau pelantikan daerah ke PW PII Banten.</p>
                <form action="{{ route('sima.surat.daerah') }}" method="POST" class="space-y-3">
                    @csrf
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Nomor Surat</label>
                        <input type="text" name="nomor_surat" required placeholder="012/PD-PII/..." class="w-full border border-slate-300 rounded-xl px-4 py-2 text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Perihal / Keperluan</label>
                        <input type="text" name="perihal" required placeholder="Permohonan SK Pelantikan" class="w-full border border-slate-300 rounded-xl px-4 py-2 text-sm">
                    </div>
                    <button type="submit" class="w-full bg-blue-950 hover:bg-blue-900 text-white py-2.5 rounded-xl text-xs font-bold transition">
                        Kirim Surat Resmi
                    </button>
                </form>

                <div class="mt-6 pt-6 border-t border-slate-100">
                    <h4 class="font-bold text-slate-800 text-sm mb-3">📬 Riwayat Surat Keluar Daerah:</h4>
                    <div class="space-y-3">
                        @foreach($surat_daerah as $sd)
                        <div class="bg-slate-50 border border-slate-200 p-3 rounded-2xl text-xs space-y-1">
                            <p class="font-bold text-blue-950">{{ $sd['perihal'] }}</p>
                            <p class="text-slate-500">Nomor: {{ $sd['nomor_surat'] }} ({{ $sd['tanggal'] }})</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif


        <!-- ================================================= -->
        <!-- FITUR KHUSUS ADMIN PENGURUS WILAYAH (PW) -->
        <!-- ================================================= -->
        @if($user['role'] == 'wilayah')
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200 space-y-6">
            <h3 class="font-extrabold text-blue-950 text-lg">Monitoring & Verifikasi Pengurus Wilayah (PW)</h3>
            <p class="text-xs text-slate-500">Panel kendali pusat untuk memantau seluruh laporan daerah, verifikasi surat, dan manajemen artikel.</p>

            <div class="grid sm:grid-cols-3 gap-4">
                <div class="bg-blue-50 border border-blue-100 p-4 rounded-2xl">
                    <p class="text-xs text-blue-600 font-bold">Total Laporan Daerah</p>
                    <p class="text-2xl font-extrabold text-blue-950 mt-1">{{ count($laporan_daerah) }} Wilayah Aktif</p>
                </div>
                <div class="bg-emerald-50 border border-emerald-100 p-4 rounded-2xl">
                    <p class="text-xs text-emerald-600 font-bold">Surat Masuk Daerah</p>
                    <p class="text-2xl font-extrabold text-emerald-950 mt-1">{{ count($surat_daerah) }} Dokumen</p>
                </div>
                <div class="bg-amber-50 border border-amber-100 p-4 rounded-2xl">
                    <p class="text-xs text-amber-600 font-bold">Artikel Publikasi</p>
                    <p class="text-2xl font-extrabold text-amber-950 mt-1">{{ count($articles) }} Terbit</p>
                </div>
            </div>

            <!-- Daftar Seluruh Laporan Daerah yang Masuk ke Pusat -->
            <div class="mt-6 pt-6 border-t border-slate-100 space-y-4">
                <h4 class="font-bold text-blue-950 text-sm">📥 Rekapitulasi Laporan Kaderisasi Seluruh Daerah:</h4>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs text-slate-600 border-collapse">
                        <thead>
                            <tr class="bg-slate-100 text-slate-700 uppercase tracking-wider">
                                <th class="p-3 rounded-l-xl">Asal Daerah</th>
                                <th class="p-3">Periode</th>
                                <th class="p-3 text-center">LBT</th>
                                <th class="p-3 text-center">LIT</th>
                                <th class="p-3 rounded-r-xl">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach($laporan_daerah as $lap)
                            <tr class="hover:bg-slate-50">
                                <td class="p-3 font-bold text-blue-950">{{ $lap['daerah'] }}</td>
                                <td class="p-3">{{ $lap['periode'] }}</td>
                                <td class="p-3 text-center font-bold text-blue-700">{{ $lap['jumlah_lbt'] }}</td>
                                <td class="p-3 text-center font-bold text-emerald-700">{{ $lap['jumlah_lit'] }}</td>
                                <td class="p-3 text-slate-500">{{ $lap['keterangan'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif


        <!-- ================================================= -->
        <!-- BAGIAN ARTIKEL PUBLIK (DAPAT DIHAPUS OLEH SEMUA) -->
        <!-- ================================================= -->
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200 space-y-6">
            <div class="border-b pb-4">
                <h3 class="font-extrabold text-blue-950 text-lg">Portal Artikel & Berita Kegiatan Terbit</h3>
                <p class="text-xs text-slate-500">Daftar artikel yang berhasil dipublikasikan oleh kader dan pengurus daerah.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                @foreach($articles as $art)
                <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm relative flex flex-col justify-between">
                    <div class="absolute top-5 right-5">
                        <a href="{{ route('sima.artikel.delete', $art['id']) }}" onclick="return confirm('Hapus artikel ini?')" class="text-red-600 hover:text-white text-xs font-bold bg-red-50 hover:bg-red-600 px-3 py-1.5 rounded-xl border border-red-200 transition">
                            🗑️ Hapus
                        </a>
                    </div>
                    <div>
                        <div class="flex items-center space-x-2 text-xs text-slate-500 mb-3 pr-24">
                            <span class="bg-blue-100 text-blue-900 px-3 py-1 rounded-full font-bold">{{ $art['kategori'] }}</span>
                            <span>{{ $art['tanggal'] }}</span>
                        </div>
                        <h4 class="font-extrabold text-blue-950 text-base leading-snug">{{ $art['judul'] }}</h4>
                        <p class="text-xs text-slate-500 mt-1 font-medium">Oleh: {{ $art['penulis'] }}</p>
                        <p class="text-sm text-slate-600 mt-3 leading-relaxed">{{ $art['isi'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </main>

    <!-- Footer -->
    <!-- Footer Profesional PW PII Banten -->
    <footer class="bg-blue-950 text-white mt-20 border-t border-blue-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-8">
            
            <div class="grid md:grid-cols-2 gap-8 justify-between items-start">
                <!-- Info Kontak & Kanal Resmi -->
                <div class="space-y-3">
                    <h3 class="font-extrabold text-base tracking-wide text-white">Terhubung dengan PII Banten</h3>
                    <p class="text-xs text-blue-200 leading-relaxed max-w-md">
                        Ikuti informasi dan publikasi resmi PW PII Banten melalui kanal komunikasi organisasi.
                    </p>
                    <div class="text-xs text-blue-300 space-y-1.5 pt-1">
                        <p>📸 Instagram: <a href="https://instagram.com/pwpii_banten47" target="_blank" class="text-white font-semibold hover:underline">@pwpii_banten47</a></p>
                        <p>✉️ Email: <a href="mailto:pelajarislambanten@gmail.com" class="text-white font-semibold hover:underline">pelajarislambanten@gmail.com</a></p>
                    </div>
                </div>

                <!-- Ajakan / Tagline -->
                <div class="space-y-3 md:text-right">
                    <h3 class="font-extrabold text-base tracking-wide text-white">Mari Bergerak Bersama!</h3>
                    <p class="text-xs text-blue-200 leading-relaxed">
                        Bersama membangun pelajar yang berilmu, berintegritas, dan berdampak.
                    </p>
                </div>
            </div>

            <!-- Garis Pemisah & Keterangan Pengelolaan -->
            <div class="border-t border-blue-900/80 pt-8 flex flex-col sm:flex-row justify-between items-center text-center sm:text-left gap-4">
                <p class="text-[11px] text-blue-300 max-w-xl leading-relaxed">
                    Website ini dikelola sebagai media informasi dan publikasi Pengurus Wilayah Pelajar Islam Indonesia Provinsi Banten Periode 2025–2027.
                </p>
                <p class="text-[10px] font-bold tracking-wider text-blue-400 uppercase">
                    PENGURUS WILAYAH PELAJAR ISLAM INDONESIA PROVINSI BANTEN · 2025–2027
                </p>
            </div>

        </div>
    </footer>

</body>
</html>