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
                    {{__('MFSM')}} <br>
                    {{__('{Multi-Factorial Scoring Model}')}} 
                    <br><br>
                    
                    {{ __("
                    Multi-Factorial Scoring Model (MFSM) adalah sebuah metode pengambilan keputusan yang digunakan untuk mengevaluasi alternatif-alternatif berdasarkan berbagai faktor yang saling terkait. 
                    Dalam metode ini, setiap alternatif diberikan skor untuk setiap faktor yang relevan, dan skor ini kemudian digabungkan untuk menentukan alternatif terbaik. 
                    Pendekatan ini memungkinkan pengambil keputusan untuk mempertimbangkan berbagai faktor yang saling berhubungan, seperti biaya, manfaat, risiko, dan lainnya, sehingga menghasilkan keputusan yang lebih komprehensif.
                    ") }}  <br><br>

                    {{__('Untuk Mengerjakan dengan metode MFSM, Klik Tombol Berikut')}}
                </div>
                <button onclick="window.location.href='{{ route('mfsm2') }}'" 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-7 rounded">
                    Mulai
                </button>
            </div>
        </div>
    </div>
</x-Layout.layout>
