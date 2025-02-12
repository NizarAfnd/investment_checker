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
                    {{__('Step 4')}} <br>
                    {{__('{ Membuat Matriks Setiap Kriteria  }')}} 
                    <br><br>

                    <!-- Deskripsi dengan teks yang lebih kecil -->
                    {{ __("
                    Setelah melakukan 3 langkah untuk membuat Indikator Matriks kriteria, langkah yang selanjutnya dilakukan adalah dengan mengimplementasikan 3 langkah tadi kepada masing masing kriteria. Jika secara istilah itu dia melakukan lopping rumus namun dengan parameter yang berbeda. Dan untuk Parameter masing masing indikator sudah saya buat sedemikian rupa.") }} <br><br>
                    <br>

                    <div class="flex flex-col space-y-4">
                        <!-- Tabel Matriks Nilai Kriteria (Vertikal) -->
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold mb-4">Tabel Parameter Kriteria</h2>
                       
                            <table class="min-w-full table-auto border-collapse border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">Kriteria</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Kamera</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">48MP ke atas</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">34-43MP</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Dibawah 34MP</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Memori</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">512GB</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">256GB</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">128GB</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Baterai</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">6000mAh</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">5000mAh</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">4000mAh</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Layar</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">8 inch</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">6 inch</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">5 inch</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Editing</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Optimal</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Tidak optimal</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Tidak bisa</td>
                                </tr>
                            </tbody>

                            </table>
                        </div>
                        <br>    
                        {{__('Untuk Tabel Normalisasi Matriks juga memiliki sebuah rata-rata yang diambli dari SUM tiap kolom sesuai dibagi dengan jumlah kriterianya :')}} <br>

                        <!-- Tabel Matriks Bobot Kriteria (Vertikal) -->
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold mb-4">Tabel Perbandingan Kamera</h2>
                       
                            <table class="min-w-full table-auto border-collapse border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">Opsi Kamera</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">48 MP ke atas</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">34-43 MP</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">Di bawah 34 MP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">48 MP ke atas</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">7</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">9</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">34-43 MP</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1/7</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">7</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Di bawah 34 MP</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1/9</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1/7</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                </tr>
                            </tbody>
                            </table>
                            
                            
                        </div>
                         <div class="flex-1">
                            <h2 class="text-lg font-semibold mb-4">Tabel Perbandingan Memori</h2>
                       
                            <table class="min-w-full table-auto border-collapse border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">Opsi Memori</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">512 GB</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">256 GB</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">128 GB</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">512 GB</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">9</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">9</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">256 GB</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1/9</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">7</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">128 GB</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1/9</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1/7</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                </tr>
                            </tbody>

                            </table>
                            <div class="flex-1">
                            <h2 class="text-lg font-semibold mb-4">Tabel Perbandingan Baterai</h2>
                       
                            <table class="min-w-full table-auto border-collapse border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">Opsi Baterai</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">6000 mAh</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">5000 mAh</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">4000 mAh</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">6000 mAh</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">5</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">5</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">5000 mAh</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1/5</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">3</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">4000 mAh</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1/5</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1/3</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                </tr>
                            </tbody>
                            </table>

                            <div class="flex-1">
                            <h2 class="text-lg font-semibold mb-4">Tabel Perbandingan Layar</h2>
                       
                            <table class="min-w-full table-auto border-collapse border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">Opsi Layar</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">8 inch</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">6 inch</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">5 inch</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">8 inch</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">5</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">5</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">6 inch</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1/5</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">3</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">5 inch</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1/5</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1/3</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                </tr>
                            </tbody>
                            </table>

                            <div class="flex-1">
                            <h2 class="text-lg font-semibold mb-4">Tabel Perbandingan Editing</h2>
                       
                            <table class="min-w-full table-auto border-collapse border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">Opsi Editing</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">Optimal</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">Stabil</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">Kencang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Optimal</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">5</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">5</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Stabil</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1/5</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">3</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Kencang</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1/5</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1/3</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                </tr>
                            </tbody>
                            </table>

                            
                            
                            
                        </div>
                    </div><br>

                     


                    <!-- Tombol untuk melanjutkan ke langkah berikutnya -->
                    <button onclick="window.location.href='{{ route('cba5') }}'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{__('Lanjutkan ke Langkah Berikutnya')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-Layout.layout>
