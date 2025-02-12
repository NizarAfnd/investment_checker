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
                    {{__('Step 1')}} <br>
                    {{__('{ Matriks Perbandingan Kriteria}')}} 
                    <br><br>

                    <!-- Deskripsi dengan teks yang lebih kecil -->
                    {{ __("
                    Membuat matriks perbandingan berpasangan antara kriteria-kriteria tersebut. Setiap elemen dalam matriks ini menunjukkan seberapa penting satu kriteria dibandingkan dengan kriteria lainnya, dengan menggunakan skala dari 1 hingga 9. ") }} <br><br>
                    {{__('Untuk skala kriteria diambil dari kalimat studi kasus yang ini:')}} <br>
                    {{ __("Untuk membuat konten yang baik, kriteria HP yang diinginkan dan paling utama adalah memiliki kamera
                    yang bagus dan memiliki memori yang cukup besar. Kriteria lain yang menjadi pertimbangan
                    adalah baterai tahan lama, layar besar (diatas 5 inci), dan bisa menjalankan aplikasi editing
                    foto dan video. sudah bisa dilakukan mapping skala kriterianya
                    ") }}
                    <br><br>

                    <!-- Tabel Fitur dan Nilai -->
                    

                        <!-- Tabel Intensitas Kepentingan dan Keterangan -->
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold mb-4">Intensitas Kepentingan</h2>
                            <table class="min-w-full table-auto border-collapse border border-gray-200">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="border border-gray-300 px-4 py-2 text-left text-sm">Intensitas</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left text-sm">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">1</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">Sama pentingnya dibandingkan lainnya</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">3</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">Sedikit lebih penting dibandingkan lainnya</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">5</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">Cukup penting dibandingkan lainnya</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">7</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">Lebih penting dibandingkan lainnya</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">9</td>
                                        <td class="border border-gray-300 px-4 py-2 text-sm">Sangat penting dibandingkan lainnya</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <!-- Paragraf penjelasan -->
                    <p class="text-sm mt-4">
                        {{__('Setelah menentukan Kriteria dan nilainya, maka selanjutnya adalah melakukan mapping dengan table Martriks Perbandingan Kriteria ')}}
                    </p>
                    <br><br>
                    <h2 class="text-lg font-semibold mb-4">Matriks Perbandingan Kriteria</h2>
                    <table class="min-w-full table-auto border-collapse border border-gray-200">
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

<br><br><br>

                    
                    <!-- Tombol untuk melanjutkan ke langkah selanjutnya atau aksi -->
                    <button onclick="window.location.href='{{ route('cba2') }}'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{__('Lanjutkan ke Langkah Berikutnya')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-Layout.layout>
