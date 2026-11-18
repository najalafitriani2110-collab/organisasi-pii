<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SIMA - PW PII Banten</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-slate-950 text-slate-100 flex items-center justify-center min-h-screen p-4">

    <div class="max-w-md w-full bg-slate-900 border border-slate-800 p-8 rounded-3xl shadow-2xl space-y-6">
        <div class="text-center space-y-2">
            <div class="w-14 h-14 bg-white rounded-full mx-auto flex items-center justify-center font-extrabold text-blue-950 text-xl shadow">PII</div>
            <h1 class="text-2xl font-extrabold tracking-wide">SIMA PW PII BANTEN</h1>
            <p class="text-xs text-slate-400">Sistem Informasi Manajemen Anggota</p>
        </div>

        @if(session('error'))
        <div class="bg-red-500/10 border border-red-500/30 text-red-400 p-3 rounded-xl text-xs font-semibold text-center">
            {{ session('error') }}
        </div>
        @endif

        <form action="{{ route('sima.login.post') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-bold text-slate-300 mb-1.5">Nama Lengkap Anda</label>
                <input type="text" name="nama" required placeholder="Contoh: Najala Fitriani" class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-blue-500">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-300 mb-1.5">Pilih Peran / Role</label>
                <select name="role" required class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-blue-500">
                    <option value="kader">Kader Aktif PII</option>
                    <option value="daerah">Pengurus Daerah (PD)</option>
                    <option value="wilayah">Pengurus Wilayah (PW / Admin Pusat)</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-300 mb-1.5">Pilih Asal Daerah / Cabang</label>
                <select name="daerah" required class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-blue-500">
                    <option value="PD Kota Serang">PD Kota Serang</option>
                    <option value="PD Kabupaten Serang">PD Kabupaten Serang</option>
                    <option value="PD Kota Cilegon">PD Kota Cilegon</option>
                    <option value="PD Kabupaten Lebak">PD Kabupaten Lebak</option>
                    <option value="PD Kabupaten Pandeglang">PD Kabupaten Pandeglang</option>
                    <option value="PD Kabupaten Tangerang">PD Kabupaten Tangerang</option>
                    <option value="PD Kota Tangerang">PD Kota Tangerang</option>
                    <option value="PD Kota Tangerang Selatan">PD Kota Tangerang Selatan</option>
                    <option value="PW PII Banten">PW PII Banten (Pusat Wilayah)</option>
                </select>
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold py-3 rounded-xl text-sm transition shadow-lg">
                Masuk ke Dashboard &rarr;
            </button>
        </form>
    </div>

</body>
</html>