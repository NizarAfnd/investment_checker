<x-Layout.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 align-center dark:text-gray-100 text-2xl">
                    {{__('Step 1')}} <br>
                    {{__('{Menentukan Kriteria}')}} 
                    <br><br>
                    
                    {{ __("
                    Kriteria yang digunakan pada MFSM adalah kriteria yang sama juga yang digunakan dalam AHP, namun berbeda dalam penghitungannya. MFSM cenderung lebih sederhana dibandingkan AHP yang bisa dibilang kompleks dalam penentuan kriterianya
                    ") }}  <br><br>
                    {{__('Berikut adalah tabel kriteria MFSM')}}

                </div>

                <!-- Tabel Kriteria -->
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
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Kamera (K)</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">2</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Memori (M)</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">3</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Baterai (B)</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">4</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Layar (L)</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">5</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Editing (E)</td>
                                </tr>
                               
                            </tbody>

                            </table>
                </div>
                    {{__('Untuk Mengerjakan dengan metode MFSM, Klik Tombol Berikut')}}
<br>
                <button onclick="window.location.href='{{ route('mfsm3') }}'" 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-7 rounded mt-4">
                    Lanjut ke langkah selanjutnya
                </button>
            </div>
        </div>
    </div>
</x-Layout.layout>
