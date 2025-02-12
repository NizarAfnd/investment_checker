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
                    {{__('{ Membuat Matriks Indikator Nilai Kriteria }')}} 
                    <br><br>

                    <!-- Deskripsi dengan teks yang lebih kecil -->
                    {{ __("
                    Setelah langkah sebelumnya telah selesai dilewati, selanjutnya adalah mencari CI, RI dan CR. ") }} <br><br>
                    {{__('CI mengukur sejauh mana konsistensi relatif pada matriks perbandingan yang kita buat : didapat dari (sum eagen value-n)/(n-1)')}} 
                    {{__('RI adalah nilai indeks yang menunjukkan tingkat konsistensi yang diharapkan secara acak untuk matriks perbandingan dengan jumlah kriteria tertentu. RI digunakan untuk membandingkan nilai CI yang diperoleh, untuk mengetahui apakah konsistensi yang ditemukan masih dalam batas toleransi.Berikut adalah nilai RI untuk berbagai ukuran matriks (jumlah kriteria):')}} 
                    <div class="flex-1">
                        <h2 class="text-lg font-semibold mb-4">Tabel RI (Random Index)</h2>
                        <table class="min-w-full table-auto border-collapse border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">n</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left text-sm">RI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">0</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">2</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">0</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">3</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">0.58</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">4</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">0.90</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">5</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1.12</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">6</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1.24</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">7</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1.32</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">8</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1.41</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">9</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1.45</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">10</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">1.49</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><br>

                    {{__('CR digunakan untuk mengevaluasi sejauh mana matriks perbandingan tersebut konsisten. Didapat dari CI/RI.  Jika CR < 0.1, maka matriks perbandingan dianggap konsisten. Jika lebih besar dari 0.1, berarti ada ketidakkonsistenan. Setelah semuanya terkumpul, kita tinggal memanggil tabelnya')}} 
                   
                    
                    
                    <br><br>

                    <div class="flex flex-col space-y-4">
                        <!-- Tabel Matriks Nilai Kriteria (Vertikal) -->
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold mb-4">Tabel CR</h2>
                       
                            <table class="min-w-full table-auto border-collapse border border-gray-200">
                                                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Indikator</th>
                                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2 text-sm">CI</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">0.215</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2 text-sm">RI</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1.12</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2 text-sm">CR</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">0.091964286</td>
                            </tr>
                            </tbody>

                            </table>
                        </div>
                        <br>    
                        {{__(' Ketika Hasil CR konsisten. Maka Nilai Matriks Kriteria dapat diambil dari nilai rata-rata dari tabel normalitas')}} <br>

                        <!-- Tabel Matriks Bobot Kriteria (Vertikal) -->
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold mb-4">Tabel Matriks Kriteria</h2>
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
                                    <td class="border border-gray-300 px-4 py-2 text-sm">0.412</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Memori (M)</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">0.412</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Baterai (B)</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">0.059</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Layar (L)</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">0.059</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">Editing (E)</td>
                                    <td class="border border-gray-300 px-4 py-2 text-sm">0.059</td>
                                </tr>
                            </tbody>

                            </table>

                        </div>
                    </div><br> 


                    <!-- Tombol untuk melanjutkan ke langkah berikutnya -->
                    <button onclick="window.location.href='{{ route('cba4') }}'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{__('Lanjutkan ke Langkah Berikutnya')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-Layout.layout>
