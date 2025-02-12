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
                    {{__('AHP')}} <br>
                    {{__('{Analytical Hierarchy Process}')}} 
                    <br><br>
                    
                    {{ __("
                    Analytic Hierarchy Process (AHP) adalah sebuah metode pengambilan keputusan yang digunakan untuk menyelesaikan masalah yang melibatkan berbagai kriteria yang saling bertentangan.
                    AHP bekerja dengan cara melakukan perbandingan berpasangan antar elemen (baik itu kriteria ataupun alternatif) untuk menentukan prioritas relatif dari setiap elemen. 
                    Setiap perbandingan dilakukan dengan memberikan nilai antara 1 hingga 9, yang menggambarkan seberapa penting elemen satu dibandingkan dengan elemen lainnya. 
                    Melalui proses ini, AHP menghitung bobot untuk setiap kriteria dan alternatif, sehingga memudahkan pengambil keputusan dalam memilih opsi terbaik berdasarkan preferensi mereka.
                    ") }}  <br><br>

                    {{__('Untuk Mengerjakan dengan metode AHP, Klik Tombol Berikut')}}
                </div>
                <button onclick="window.location.href='{{ route('cba1') }}'" 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-7 rounded">
                    Mulai
                </button>
            </div>
        </div>
    </div>
</x-Layout.layout>
