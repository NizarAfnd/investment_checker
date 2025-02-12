<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CBAController extends Controller
{
    public function hitung(Request $request)
    {
        // Ambil data input dari form
        $pendapatanEndorsement = $request->input('pendapatan_endorsement');
        $hargaJualKembali = $request->input('harga_jual_kembali');

        // Biaya Pembelian HP dan Penghematan Biaya Sewa
        $biayaPembelianHp = 5000000;
        $penghematanBiayaSewaHp = 1200000;

        // Perhitungan Total Manfaat dan Manfaat Bersih
        $totalManfaat = $penghematanBiayaSewaHp + $pendapatanEndorsement + $hargaJualKembali;
        $manfaatBersih = $totalManfaat - $biayaPembelianHp;

        // Perhitungan ROI
        $roi = ($manfaatBersih / $biayaPembelianHp) * 100;

        // Simpan hasil perhitungan di sesi
        session([
            'total_manfaat' => $totalManfaat,
            'manfaat_bersih' => $manfaatBersih,
            'roi' => $roi
        ]);

        // Arahkan ke halaman hasil perhitungan
        return redirect()->route('hasil-perhitungan');
    }

    public function tampilkanHasil()
    {
        // Ambil hasil perhitungan dari sesi
        $totalManfaat = session('total_manfaat');
        $manfaatBersih = session('manfaat_bersih');
        $roi = session('roi');

        // Tampilkan hasil di halaman baru
        return view('hasil_perhitungan', compact('totalManfaat', 'manfaatBersih', 'roi'));
    }
}
