<x-Layout.layout>
      
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-2xl">
                    {{__('Studi Kasus')}} <br><br><br>
                    
                    {{ __("
                    Seorang Influencer pemula ingin membeli sebuah HP untuk menunjang pekerjaannya dalam
                    membuat konten yang baik. Budget yang dimiliki maksimal 5 juta rupiah. Untuk membuat
                    konten yang baik, kriteria HP yang diinginkan dan paling utama adalah memiliki kamera
                    yang bagus dan memiliki memori yang cukup besar. Kriteria lain yang menjadi pertimbangan
                    adalah baterai tahan lama, layar besar (diatas 5 inci), dan bisa menjalankan aplikasi editing
                    foto dan video. Berdasarkan kondisi tersebut, HP apa yang paling cocok untuk dibeli oleh
                    influencer ini?
                    ") }}  <br><br>

                    {{__('<<-- Untuk Mengerjakan dengan masing masing metode, silahkan pilih sesuai yang ada di menu')}}
                </div>
            </div>
        </div>
    </div>
</x-Layout.layout>
