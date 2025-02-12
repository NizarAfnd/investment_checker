<x-Layout.layout> 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Hasil Perhitungan
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h3 class="text-2xl font-semibold">{{ __('Hasil Perhitungan Manfaat dan ROI') }}</h3>
                <br>

                <!-- Langkah-langkah sebelum tabel -->
                <div class="mb-6">
                    <h4 class="text-lg font-semibold">{{ __('Langkah 3: Tentukan Manfaat') }}</h4>
                    <ul class="list-disc ml-6 text-gray-600 dark:text-gray-300">
                        <li>{{ __('Penghematan biaya sewa HP: Rp 1.200.000 per tahun') }}</li>
                        <li>{{ __('Peningkatan pendapatan endorsement: Rp 6.000.000 per tahun') }}</li>
                        <li>{{ __('Nilai jual kembali HP: Rp 4.000.000') }}</li>
                    </ul>
                </div>

                <div class="mb-6">
                    <h4 class="text-lg font-semibold">{{ __('Langkah 4: Tentukan Waktu Evaluasi') }}</h4>
                    <ul class="list-disc ml-6 text-gray-600 dark:text-gray-300">
                        <li>{{ __('Periode evaluasi: 1 tahun (asumsi untuk analisis tahunan)') }}</li>
                    </ul>
                </div>

                <div class="mb-6">
                    <h4 class="text-lg font-semibold">{{ __('Langkah 5: Hitung Total Biaya dan Manfaat') }}</h4>
                    <ul class="list-disc ml-6 text-gray-600 dark:text-gray-300">
                        <li>{{ __('Total Manfaat: Rp 11.200.000') }}</li>
                        <li>{{ __('Total Biaya: Rp 5.000.000') }}</li>
                    </ul>
                </div>

                <div class="mb-6">
                    <h4 class="text-lg font-semibold">{{ __('Langkah 6: Hitung Manfaat Bersih') }}</h4>
                    <ul class="list-disc ml-6 text-gray-600 dark:text-gray-300">
                        <li>{{ __('Manfaat Bersih = Rp 11.200.000 - Rp 5.000.000 = Rp 6.200.000') }}</li>
                    </ul>
                </div>

                <div class="mb-6">
                    <h4 class="text-lg font-semibold">{{ __('Langkah 7: Hitung ROI') }}</h4>
                    <ul class="list-disc ml-6 text-gray-600 dark:text-gray-300">
                        <li>{{ __('ROI = (Rp 6.200.000 / Rp 5.000.000) * 100 = 124%') }}</li>
                    </ul>
                </div>

                <!-- Tabel Hasil Perhitungan -->
                <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700">
                    <thead>
                        <tr class="bg-gray-100 dark:bg-gray-900">
                            <th class="px-4 py-2 text-left text-gray-700 dark:text-gray-100">{{ __('Keterangan') }}</th>
                            <th class="px-4 py-2 text-left text-gray-700 dark:text-gray-100">{{ __('Nilai') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t border-gray-200 dark:border-gray-700">
                            <td class="px-4 py-2 text-gray-600 dark:text-gray-300 font-semibold">{{ __('Total Manfaat') }}</td>
                            <td class="px-4 py-2 text-gray-600 dark:text-gray-300">Rp {{ number_format($totalManfaat, 2, ',', '.') }}</td>
                        </tr>
                        <tr class="border-t border-gray-200 dark:border-gray-700">
                            <td class="px-4 py-2 text-gray-600 dark:text-gray-300 font-semibold">{{ __('Manfaat Bersih') }}</td>
                            <td class="px-4 py-2 text-gray-600 dark:text-gray-300">Rp {{ number_format($manfaatBersih, 2, ',', '.') }}</td>
                        </tr>
                        <tr class="border-t border-gray-200 dark:border-gray-700">
                            <td class="px-4 py-2 text-gray-600 dark:text-gray-300 font-semibold">{{ __('ROI') }}</td>
                            <td class="px-4 py-2 text-gray-600 dark:text-gray-300">{{ number_format($roi, 2, ',', '.') }}%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-Layout.layout>
