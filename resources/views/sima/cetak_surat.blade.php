<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Surat Keterangan Aktif - {{ $surat['nama'] }}</title>
    <style>
        body { font-family: 'Times New Roman', serif; padding: 40px; max-width: 750px; margin: auto; line-height: 1.6; }
        .kop { text-align: center; border-bottom: 3px double #000; padding-bottom: 10px; margin-bottom: 25px; }
        .kop h2, .kop h3, .kop p { margin: 2px 0; }
        .judul { text-align: center; margin-bottom: 20px; }
        .ttd { margin-top: 50px; text-align: right; }
        @media print { .no-print { display: none; } }
    </style>
</head>
<body>
    <div class="no-print" style="margin-bottom: 20px; text-align: right;">
        <button onclick="window.print()" style="padding: 10px 20px; background: #1e3a8a; color: #fff; border: none; border-radius: 6px; cursor: pointer;">
            Cetak / Simpan PDF
        </button>
    </div>

    <div class="kop">
        <h3>PENGURUS WILAYAH</h3>
        <h2>PELAJAR ISLAM INDONESIA (PW PII) BANTEN</h2>
        <p style="font-size: 13px;">Sekretariat: Jl. Raya Serang - Pandeglang, Provinsi Banten • Email: pwiibanten@gmail.com</p>
    </div>

    <div class="judul">
        <h3 style="text-decoration: underline; margin-bottom: 2px;">SURAT KETERANGAN AKTIF KADER</h3>
        <p style="margin-top: 0;">Nomor: {{ $surat['id'] }}/A/PW-PII-BTN/XI/2026</p>
    </div>

    <p>Pengurus Wilayah Pelajar Islam Indonesia (PW PII) Provinsi Banten dengan ini menerangkan bahwa:</p>

    <table style="margin-left: 30px; margin-bottom: 20px;">
        <tr><td width="160">Nama Lengkap</td><td>: <strong>{{ $surat['nama'] }}</strong></td></tr>
        <tr><td>Nomor Registrasi (NRA)</td><td>: {{ $surat['nra'] }}</td></tr>
        <tr><td>Asal Pengurus Daerah</td><td>: {{ $surat['daerah'] }}</td></tr>
        <tr><td>Keperluan</td><td>: {{ $surat['keperluan'] }}</td></tr>
    </table>

    <p>Adalah benar merupakan kader aktif Pelajar Islam Indonesia (PII) di bawah naungan Pengurus Wilayah PII Banten. Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.</p>

    <div class="ttd">
        <p>Serang, {{ date('d F Y') }}</p>
        <p><strong>Pengurus Wilayah PII Banten</strong></p>
        <br><br><br>
        <p><u><strong>Sekretaris Umum</strong></u></p>
    </div>
</body>
</html>