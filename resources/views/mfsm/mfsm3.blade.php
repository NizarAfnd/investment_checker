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
                    {{__('Step 3')}} <br>
                    {{__('{ Menentukan Bobot}')}} 
                    <br><br>

                    <!-- Deskripsi dengan teks yang lebih kecil -->
                    {{ __("
                    Penentuan bobot dilakukan dengan memberikan paraneter pada setiap kriteria, pada kriteria bobot akan memiliki skala dalam bentuk persen, yang mana ketika semua bobot kriteria dijumlah hasilnya akan 100% .") }} <br><br>
                    {{__('Untuk Tabelnya adalah seperti ini :')}} <br>
                    
                    <div class="flex-1">
                            <h2 class="text-lg font-semibold mb-4">Tabel Bobot Kriteria</h2>
                            <table class="min-w-full table-auto border-collapse border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">Kriteria</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">Nilai</th>
                                </tr>
                            </thead>    
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Kamera (K)</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">35%</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Memori (M)</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">35$</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Baterai (B)</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">10%</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Layar (L)</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">10%</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Editing (E)</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">10%</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Total</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">100%</td>
                                </tr>
                            </tbody>

                            </table>


                        </div>
                    </div><br> 


                    <!-- Tombol untuk melanjutkan ke langkah berikutnya -->
                    <button onclick="window.location.href='{{ route('mfsm4') }}'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{__('Lanjutkan ke Langkah Berikutnya')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-Layout.layout>
