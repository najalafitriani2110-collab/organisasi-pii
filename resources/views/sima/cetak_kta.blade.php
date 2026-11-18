<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cetak KTA - {{ $user['name'] }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @media print { .no-print { display: none; } }
    </style>
</head>
<body class="bg-gray-200 flex flex-col items-center justify-center min-h-screen p-4">
    <div class="w-[420px] h-[250px] bg-gradient-to-r from-blue-950 via-blue-900 to-blue-800 rounded-2xl shadow-2xl text-white p-6 flex flex-col justify-between relative overflow-hidden">
        <div class="flex items-center justify-between border-b border-blue-700 pb-3">
            <div>
                <h1 class="font-bold text-sm tracking-wide">PELAJAR ISLAM INDONESIA</h1>
                <p class="text-[11px] text-blue-300">PENGURUS WILAYAH PROVINSI BANTEN</p>
            </div>
            <div class="w-9 h-9 rounded-full bg-white text-blue-900 font-extrabold flex items-center justify-center text-xs">PII</div>
        </div>

        <div class="my-auto">
            <p class="text-[10px] uppercase text-blue-300">Kartu Tanda Anggota (KTA)</p>
            <h2 class="text-lg font-bold tracking-wide mt-0.5">{{ strtoupper($user['name']) }}</h2>
            <p class="text-xs font-mono text-yellow-300 mt-1">NRA: {{ $user['nra'] }}</p>
            <p class="text-xs text-blue-100 mt-1">{{ $user['daerah'] }} • {{ $user['jenjang'] }}</p>
        </div>

        <div class="flex justify-between items-end text-[10px] text-blue-300">
            <span>Berlaku Selama Menjadi Kader</span>
            <span class="font-semibold text-white">PW PII BANTEN</span>
        </div>
    </div>

    <button onclick="window.print()" class="no-print mt-6 bg-blue-800 text-white px-6 py-2.5 rounded-xl font-semibold shadow hover:bg-blue-900">
        Cetak / Simpan Sebagai PDF
    </button>
</body>
</html>