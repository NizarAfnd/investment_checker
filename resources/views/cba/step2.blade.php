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
                    {{__('Step 2')}} <br>
                    {{__('{ Membuat Matriks Normalisasi Kriteria }')}} 
                    <br><br>

                    <!-- Deskripsi dengan teks yang lebih kecil -->
                    {{ __("
                    Menormalkan matriks didapat dari mengubah tabel Matriks perbandingan, lalu tiap tabel didapat dari lokasi kolom yang sama dibagi dengan total. Menormalkan matriks bertujuan untuk memastikan bahwa semua elemen dalam matriks tersebut berada pada skala yang setara, memungkinkan kita untuk menghitung rata-rata dan eigen value yang mewakili bobot kriteria secara objektif.") }} <br><br>
                    {{__('Untuk Tabelnya adalah seperti ini :')}} <br>
                    
                    
                    <br><br>

                    <div class="flex flex-col space-y-4">
                        <!-- Tabel Matriks Nilai Kriteria (Vertikal) -->
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold mb-4">Tabel Sebelumnya</h2>
                       
                            <table class="min-w-full table-auto border-collapse border border-gray-200">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Kriteria</th>
                                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Kamera (K)</th>
                                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Memori (M)</th>
                                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Baterai (B)</th>
                                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Layar (L)</th>
                                <th class="border border-gray-300 px-4 py-2 text-left text-sm">Editing (E)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2 text-sm">Kamera (K)</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">9</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">7</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">7</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">7</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2 text-sm">Memori (M)</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1/9</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">7</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">7</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">7</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2 text-sm">Baterai (B)</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1/7</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1/7</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2 text-sm">Layar (L)</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1/7</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1/7</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2 text-sm">Editing (E)</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1/7</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1/7</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                            </tr>
                        </tbody>
                    </table>
                        </div>
                        <br>    
                        {{__('Untuk Tabel Normalisasi Matriks juga memiliki sebuah rata-rata yang diambli dari SUM tiap kolom sesuai dibagi dengan jumlah kriterianya. Setelah dilakukan normalisasi terhadap matriks perbandingan kriteria, kita akan memperoleh matriks baru yang menunjukkan bobot relatif dari setiap kriteria. Pada tabel berikut, setiap kolom adalah hasil pembagian nilai pada kolom matriks perbandingan dengan jumlah total pada kolom tersebut. Kolom Rata-rata adalah hasil rata-rata dari nilai pada tiap baris matriks normalisasi, yang akan digunakan untuk menghitung Eigen Value.')}} <br>
                        <br>{{__(' -> Eigen Value adalah nilai yang dihitung dari perkalian antara matriks normalisasi dan vektor bobot, dan ini menggambarkan kontribusi keseluruhan setiap kriteria terhadap keputusan yang akan diambil.')}} 
                        <!-- Tabel Matriks Bobot Kriteria (Vertikal) -->
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold mb-4">Tabel Normalisasi Matriks</h2>
                            <table class="min-w-full table-auto border-collapse border border-gray-200">
                            
                            <thead>
                                    <tr class="bg-gray-100">
                                        <th class="border border-gray-300 px-4 py-2 text-left text-sm">Kriteria</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left text-sm">Kamera (K)</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left text-sm">Memori (M)</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left text-sm">Baterai (B)</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left text-sm">Layar (L)</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left text-sm">Editing (E)</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left text-sm">Rata-rata</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left text-sm">Eigen Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">Kamera (K)</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.649</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.863</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.412</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.412</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.412</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.552</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">1.685</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">Memori (M)</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.072</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.096</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.412</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.412</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.412</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.281</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">1.685</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">Baterai (B)</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.068</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.014</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.059</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.059</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.059</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.052</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.311</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">Layar (L)</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.068</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.014</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.059</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.059</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.059</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.052</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.311</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">Editing (E)</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.068</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.014</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.059</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.059</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.059</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.052</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.311</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">Total</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">0.925</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">1.001</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">1.001</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">1.001</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">1.001</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">4.929</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">4.303</td>
                                    </tr>
                                </tbody>
                                </table>



                        </div>
                    </div><br> 


                    <!-- Tombol untuk melanjutkan ke langkah berikutnya -->
                    <button onclick="window.location.href='{{ route('cba3') }}'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{__('Lanjutkan ke Langkah Berikutnya')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-Layout.layout>
