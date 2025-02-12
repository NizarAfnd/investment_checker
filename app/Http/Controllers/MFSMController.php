<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MFSMController extends Controller
{
    public function index()
    {
        return view('mfsm.mfsm4');
    }

    public function process(Request $request)
    {
        $data = $request->input('barang');

        // Bobot kriteria
        $bobot = [
            'kamera' => 0.35,
            'memori' => 0.35,
            'baterai' => 0.10,
            'layar' => 0.10,
            'editing' => 0.10,
        ];

        $hasil = [];
        foreach ($data as $barang) {
            $nilai = [
                'kamera' => $barang['kamera'] * $bobot['kamera'],
                'memori' => $barang['memori'] * $bobot['memori'],
                'baterai' => $barang['baterai'] * $bobot['baterai'],
                'layar' => $barang['layar'] * $bobot['layar'],
                'editing' => $barang['editing'] * $bobot['editing'],
            ];

            $total = array_sum($nilai);

            $hasil[] = [
                'nama' => $barang['nama'],
                'nilai' => $nilai,
                'total' => $total,
            ];
        }

        // Urutkan berdasarkan total nilai
        usort($hasil, fn($a, $b) => $b['total'] <=> $a['total']);

        return view('mfsm.process', compact('hasil'));
    }
}
