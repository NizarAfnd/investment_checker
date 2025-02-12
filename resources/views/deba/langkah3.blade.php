<x-Layout.layout> 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 align-center dark:text-gray-100 text-2xl">
                {{__('Step 1')}} <br>
                {{__('{ Menentukan Kriteria }')}} 
                <br><br>
                {{ __("
                Untuk kriterianya memiliki jumlah sebanyak 5 dengan tabel berikut.
                ") }}  <br><br>
                
                <div class="flex-1">
                            <h2 class="text-lg font-semibold mb-4">Tabel Bobot Kriteria</h2>
                            <table class="min-w-full table-auto border-collapse border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">No</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">Kriteria</th>
                                </tr>
                            </thead>    
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Biaya Pembelian HP</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">2</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Penghematan biaya sewa</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">3</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Peningkatan pendapatan</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">4</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Nilai jual setelah 4 tahun</td>
                                </tr>
                                
                               
                            </tbody>

                            </table>
                </div>


                


                {{__('Untuk Mengerjakan dengan metode CBA, Klik Tombol Berikut')}}
            </div>
            <button onclick="window.location.href='{{ route('perhitungan-hitung') }}'" 
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-7 rounded">
                Lanjut ke Langkah selanjutnya
            </button>
        </div>
    </div>
</x-Layout.layout>
