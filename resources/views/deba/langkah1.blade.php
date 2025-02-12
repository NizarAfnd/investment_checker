<x-Layout.layout> 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 align-center dark:text-gray-100 text-2xl">
                {{__('CBA')}} <br>
                {{__('{Cost-Benefit Analysis}')}} 
                <br><br>
                
                {{ __("
                Cost-Benefit Analysis (CBA) adalah metode yang digunakan untuk mengevaluasi alternatif-alternatif keputusan dengan membandingkan biaya yang dikeluarkan dan manfaat yang diperoleh dari keputusan tersebut. 
                Tujuan utama dari CBA adalah untuk menentukan apakah manfaat yang didapatkan lebih besar daripada biaya yang harus dikeluarkan. 
                Dalam analisis ini, biaya dan manfaat diukur dalam satuan yang sama, sering kali menggunakan nilai uang, dan dihitung untuk mengetahui apakah suatu keputusan layak diambil atau tidak. 
                CBA sering digunakan dalam pengambilan keputusan untuk proyek-proyek bisnis, kebijakan publik, dan perencanaan jangka panjang.
                ") }}  <br><br>

                {{__('Untuk Mengerjakan dengan metode CBA, Klik Tombol Berikut')}}
            </div>
            <button onclick="window.location.href='{{ route('langkah2') }}'" 
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-7 rounded">
                Mulai
            </button>
        </div>
    </div>
</x-Layout.layout>
