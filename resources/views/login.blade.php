<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Anggota - PW PII Banten</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-900 text-slate-800 antialiased flex items-center justify-center min-h-screen">

    <div class="max-w-md w-full mx-4">
        <!-- Card Login -->
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden p-8 border border-slate-100">
            
            <!-- Logo & Header -->
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-blue-950 text-white rounded-2xl mx-auto flex items-center justify-center font-extrabold text-2xl shadow-lg mb-4">
                    PII
                </div>
                <h2 class="text-2xl font-bold text-blue-950">Login Anggota</h2>
                <p class="text-sm text-slate-500 mt-1">Portal Akses KTA & Layanan Kader PW PII Banten</p>
            </div>

            <!-- Form Login -->
            <form action="/login" method="POST">
                @csrf
                <div class="space-y-5">
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Nomor Induk Anggota (NIA) / Email</label>
                        <input type="text" name="identity" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-900 focus:border-transparent text-sm transition" placeholder="Masukkan NIA atau email kamu">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Password</label>
                        <input type="password" name="password" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-900 focus:border-transparent text-sm transition" placeholder="••••••••">
                    </div>

                    <div class="flex items-center justify-between text-sm">
                        <label class="flex items-center text-slate-600">
                            <input type="checkbox" name="remember" class="rounded border-slate-300 text-blue-900 focus:ring-blue-900 mr-2">
                            Ingat saya
                        </label>
                        <a href="#" class="text-blue-900 font-semibold hover:underline">Lupa password?</a>
                    </div>

                    <button type="submit" class="w-full bg-blue-950 hover:bg-blue-900 text-white font-bold py-3 rounded-xl shadow-lg transition duration-200 text-sm">
                        Masuk ke Akun
                    </button>
                </div>
            </form>

            <!-- Kembali ke Beranda -->
            <div class="mt-8 text-center border-t border-slate-100 pt-6">
                <a href="/" class="text-sm font-medium text-slate-600 hover:text-blue-950 transition flex items-center justify-center gap-1">
                    &larr; Kembali ke Beranda Utama
                </a>
            </div>

        </div>
    </div>

</body>
</html>