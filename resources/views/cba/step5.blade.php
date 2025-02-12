<x-Layout.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-s text-gray-800 dark:text-gray-200 leading-tight">
            <!-- Header kosong jika tidak dibutuhkan -->
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 align-center dark:text-gray-100 text-sm">
                    <!-- Judul dengan ukuran teks yang lebih kecil -->
                    {{__('Step 5')}} <br>
                    {{__('{ Membuat Penilaian Setiap Kriteria  }')}} 
                    <br><br>

                    <!-- Deskripsi dengan teks yang lebih kecil -->
                    {{ __("
                    Setelah menentukan tabel perbandingan setiap kriteria, langkah selanjutnya adalah melakukan looping langkah 1 sampai 3 dengan logika yangs sama. Nantinya akan digunakan sebagai tolak ukur untuk menghitung kelayakan dari item yang akan dipertimbangkan") }} <br><br>
                    <br>
                    {{__('{ Sementara untuk hasil Loopingannya adalah sebagai berikut  }')}} 

                    
                        <br>    
                        {{__('Untuk Tabel Normalisasi Matriks juga memiliki sebuah rata-rata yang diambli dari SUM tiap kolom sesuai dibagi dengan jumlah kriterianya :')}} <br>

                        <!-- Tabel Matriks Bobot Kriteria (Vertikal) -->
                        
                    </div><br>

                    <div class="flex-1">
    <h2 class="text-lg font-semibold mb-4">Kriteria Kamera</h2>
    <table class="min-w-full table-auto border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Kamera</th>
                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-sm">48MP ke atas</td>
                <td class="border border-gray-300 px-4 py-2 text-sm">0.627</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-sm">34-43MP</td>
                <td class="border border-gray-300 px-4 py-2 text-sm">0.263</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-sm">Dibawah 34MP</td>
                <td class="border border-gray-300 px-4 py-2 text-sm">0.110</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="flex-1">
    <h2 class="text-lg font-semibold mb-4">Kriteria Memori</h2>
    <table class="min-w-full table-auto border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Memori</th>
                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-sm">512GB</td>
                <td class="border border-gray-300 px-4 py-2 text-sm">0.627</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-sm">256GB</td>
                <td class="border border-gray-300 px-4 py-2 text-sm">0.263</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-sm">128GB</td>
                <td class="border border-gray-300 px-4 py-2 text-sm">0.110</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="flex-1">
    <h2 class="text-lg font-semibold mb-4">Kriteria Baterai</h2>
    <table class="min-w-full table-auto border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Baterai</th>
                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-sm">6000mAh</td>
                <td class="border border-gray-300 px-4 py-2 text-sm">0.0896</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-sm">5000mAh</td>
                <td class="border border-gray-300 px-4 py-2 text-sm">0.0377</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-sm">4000mAh</td>
                <td class="border border-gray-300 px-4 py-2 text-sm">0.0158</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="flex-1">
    <h2 class="text-lg font-semibold mb-4">Kriteria Layar</h2>
    <table class="min-w-full table-auto border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Layar</th>
                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-sm">8 inch</td>
                <td class="border border-gray-300 px-4 py-2 text-sm">0.0896</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-sm">6 inch</td>
                <td class="border border-gray-300 px-4 py-2 text-sm">0.0377</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-sm">5 inch</td>
                <td class="border border-gray-300 px-4 py-2 text-sm">0.0158</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="flex-1">
    <h2 class="text-lg font-semibold mb-4">Kriteria Editing</h2>
    <table class="min-w-full table-auto border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Editing</th>
                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-sm">Optimal</td>
                <td class="border border-gray-300 px-4 py-2 text-sm">0.0896</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-sm">Tidak optimal</td>
                <td class="border border-gray-300 px-4 py-2 text-sm">0.0377</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-sm">Tidak bisa</td>
                <td class="border border-gray-300 px-4 py-2 text-sm">0.0158</td>
            </tr>
        </tbody>
    </table>
</div>
 


                    <!-- Tombol untuk melanjutkan ke langkah berikutnya -->
                    <button onclick="window.location.href='{{ route('ahp.step6') }}'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{__('Lanjutkan ke Langkah Berikutnya')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-Layout.layout>
