<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimaController extends Controller
{
    private function initData()
    {
        if (!session()->has('articles')) {
            session(['articles' => [
                [
                    'id' => 1,
                    'judul' => 'Peran Pelajar Islam Banten di Era Transformasi Digital',
                    'penulis' => 'Ahmad Fauzi (Kader PD Serang)',
                    'kategori' => 'Opini Kader',
                    'tanggal' => '15 Nov 2026',
                    'status' => 'Published',
                    'isi' => 'Pelajar Islam Indonesia (PII) harus menjadi pelopor literasi digital berbasis nilai keislaman di Banten...'
                ]
            ]]);
        }

        if (!session()->has('surat_kader')) {
            session(['surat_kader' => [
                [
                    'id' => 'SK-001',
                    'nama' => 'Najala Fitriani',
                    'nra' => 'PII-BTN-2025-121',
                    'daerah' => 'PD Kabupaten Lebak',
                    'keperluan' => 'Persyaratan Beasiswa Kader',
                    'status' => 'Disetujui'
                ]
            ]]);
        }

        if (!session()->has('laporan_daerah')) {
            session(['laporan_daerah' => [
                [
                    'id' => 1,
                    'daerah' => 'PD Kabupaten Lebak',
                    'periode' => 'Triwulan IV 2026',
                    'jumlah_lbt' => 45,
                    'jumlah_lit' => 12,
                    'keterangan' => 'Kaderisasi komisariat berjalan aktif dan progresif.'
                ]
            ]]);
        }

        if (!session()->has('surat_daerah')) {
            session(['surat_daerah' => [
                [
                    'id' => 1,
                    'pengirim' => 'PD Kabupaten Lebak',
                    'perihal' => 'Permohonan SK Pengurus Daerah Periode 2025-2027',
                    'nomor_surat' => '012/PD-PII/LBK/XI/2026',
                    'tanggal' => '17 Nov 2026',
                    'status' => 'Menunggu Verifikasi PW'
                ]
            ]]);
        }
    }

    public function showLogin()
    {
        $this->initData();
        return view('sima.login');
    }

    public function processLogin(Request $request)
    {
        $this->initData();
        $role = $request->input('role');
        $inputName = $request->input('nama', 'Anggota PII');
        $inputDaerah = $request->input('daerah', 'PD Kabupaten Lebak');

        $users = [
            'kader' => [
                'name' => $inputName,
                'role' => 'kader',
                'role_label' => 'Kader Aktif PII',
                'nra' => 'PII-BTN-2025-121',
                'daerah' => $inputDaerah,
                'jenjang' => 'LBT (Leadership Basic Training)'
            ],
            'daerah' => [
                'name' => $inputName,
                'role' => 'daerah',
                'role_label' => 'Pengurus Daerah (PD)',
                'nra' => 'PD-BANTEN-01',
                'daerah' => $inputDaerah,
                'jenjang' => 'Struktural Daerah'
            ],
            'wilayah' => [
                'name' => $inputName,
                'role' => 'wilayah',
                'role_label' => 'Admin Pengurus Wilayah (PW)',
                'nra' => 'PW-BANTEN-01',
                'daerah' => 'Provinsi Banten',
                'jenjang' => 'Pimpinan Wilayah'
            ]
        ];

        if (isset($users[$role])) {
            session(['sima_user' => $users[$role]]);
            return redirect()->route('sima.dashboard');
        }

        return back()->with('error', 'Silakan pilih peran akun demo.');
    }

    public function logout()
    {
        session()->forget('sima_user');
        return redirect()->route('sima.login');
    }

    public function dashboard()
    {
        $this->initData();
        $user = session('sima_user');
        if (!$user) return redirect()->route('sima.login');

        return view('sima.dashboard', [
            'user' => $user,
            'articles' => session('articles', []),
            'surat_kader' => session('surat_kader', []),
            'laporan_daerah' => session('laporan_daerah', []),
            'surat_daerah' => session('surat_daerah', [])
        ]);
    }

    public function storeArticle(Request $request)
    {
        $user = session('sima_user');
        $articles = session('articles', []);

        $articles[] = [
            'id' => time(),
            'judul' => $request->judul,
            'penulis' => $user['name'] . ' (' . $user['daerah'] . ')',
            'kategori' => $user['role'] == 'kader' ? 'Opini Kader' : 'Berita Kegiatan Daerah',
            'tanggal' => date('d M Y'),
            'status' => 'Published',
            'isi' => $request->isi
        ];

        session(['articles' => $articles]);
        return back()->with('success', 'Artikel berhasil dipublikasikan!');
    }

    public function deleteArticle($id)
    {
        $articles = session('articles', []);
        $articles = array_values(array_filter($articles, function ($art) use ($id) {
            return $art['id'] != $id;
        }));
        session(['articles' => $articles]);
        return back()->with('success', 'Artikel berhasil dihapus!');
    }

    public function storeSuratKader(Request $request)
    {
        $user = session('sima_user');
        $surat = session('surat_kader', []);

        $surat[] = [
            'id' => 'SK-00' . (count($surat) + 1),
            'nama' => $user['name'],
            'nra' => $user['nra'],
            'daerah' => $user['daerah'],
            'keperluan' => $request->keperluan,
            'status' => 'Diproses PW'
        ];

        session(['surat_kader' => $surat]);
        return back()->with('success', 'Pengajuan Surat Keterangan Aktif berhasil dikirim ke PW!');
    }

    public function storeSuratDaerah(Request $request)
    {
        $user = session('sima_user');
        $suratDaerah = session('surat_daerah', []);

        $suratDaerah[] = [
            'id' => count($suratDaerah) + 1,
            'pengirim' => $user['daerah'],
            'perihal' => $request->perihal,
            'nomor_surat' => $request->nomor_surat,
            'tanggal' => date('d M Y'),
            'status' => 'Terkirim ke PW'
        ];

        session(['surat_daerah' => $suratDaerah]);
        return back()->with('success', 'Surat resmi daerah berhasil dikirim ke Pengurus Wilayah!');
    }

    public function storeLaporanDaerah(Request $request)
    {
        $user = session('sima_user');
        $laporan = session('laporan_daerah', []);

        $laporan[] = [
            'id' => time(),
            'daerah' => $user['daerah'],
            'periode' => $request->periode,
            'jumlah_lbt' => $request->jumlah_lbt,
            'jumlah_lit' => $request->jumlah_lit,
            'keterangan' => $request->keterangan
        ];

        session(['laporan_daerah' => $laporan]);
        return back()->with('success', 'Laporan perkembangan kaderisasi daerah berhasil disimpan!');
    }

    public function deleteLaporanDaerah($id)
    {
        $laporan = session('laporan_daerah', []);
        
        $laporan = array_values(array_filter($laporan, function ($lap) use ($id) {
            return $lap['id'] != $id;
        }));

        session(['laporan_daerah' => $laporan]);
        return back()->with('success', 'Laporan daerah berhasil dihapus!');
    }

    public function cetakKta()
    {
        $user = session('sima_user');
        if (!$user) return redirect()->route('sima.login');
        return view('sima.cetak_kta', compact('user'));
    }

    public function cetakSurat($id)
    {
        $user = session('sima_user');
        $suratList = session('surat_kader', []);
        $surat = collect($suratList)->firstWhere('id', $id) ?? $suratList[0];

        return view('sima.cetak_surat', compact('user', 'surat'));
    }
}