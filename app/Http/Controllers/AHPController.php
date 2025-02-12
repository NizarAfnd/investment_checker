<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AHPController extends Controller
{
    public function calculate(Request $request)
    {
        $barangList = $request->input('barang');

        $nilaiKategori = [
            'kamera' => [48 => 0.627, 34 => 0.263, 0 => 0.110],
            'memori' => [512 => 0.627, 256 => 0.263, 0 => 0.110],
            'baterai' => [6000 => 0.0896, 5000 => 0.0377, 0 => 0.0158],
            'layar' => [8 => 0.0896, 6 => 0.0377, 0 => 0.0158],
            'editing' => ['optimal' => 0.0896, 'tidak optimal' => 0.0377, 'tidak bisa' => 0.0158],
        ];

        $matriksNilai = [
            'kamera' => 0.412,
            'memori' => 0.412,
            'baterai' => 0.059,
            'layar' => 0.059,
            'editing' => 0.059,
        ];

        $hasil = [];
        foreach ($barangList as $barang) {
            $total = 0;

            // Kamera
            $nilaiKamera = $this->getCategoryValue($barang['kamera'], $nilaiKategori['kamera']);
            $total += $nilaiKamera * $matriksNilai['kamera'];

            // Memori
            $nilaiMemori = $this->getCategoryValue($barang['memori'], $nilaiKategori['memori']);
            $total += $nilaiMemori * $matriksNilai['memori'];

            // Baterai
            $nilaiBaterai = $this->getCategoryValue($barang['baterai'], $nilaiKategori['baterai']);
            $total += $nilaiBaterai * $matriksNilai['baterai'];

            // Layar
            $nilaiLayar = $this->getCategoryValue($barang['layar'], $nilaiKategori['layar']);
            $total += $nilaiLayar * $matriksNilai['layar'];

            // Editing
            $nilaiEditing = $nilaiKategori['editing'][$barang['editing']] ?? 0;
            $total += $nilaiEditing * $matriksNilai['editing'];

            $hasil[] = [
                'nama' => $barang['nama'],
                'total' => $total,
            ];
        }

        // Urutkan hasil
        usort($hasil, fn($a, $b) => $b['total'] <=> $a['total']);

        return view('calculate', compact('hasil'));
    }

    private function getCategoryValue($value, $category)
    {
        foreach ($category as $limit => $score) {
            if ($value >= $limit) {
                return $score;
            }
        }
        return min($category); // Nilai terendah jika tidak ada yang cocok
    }
}
