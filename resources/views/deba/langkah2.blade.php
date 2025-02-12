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
                {{__('{Studi Kasus}')}} 
                <br><br>
                
                {{ __("
                Dikarenakan Studi kasus yang sebenarnya kurang cocok untuk metode CBA. Maka untuk mengerjakan studi kasus dengan metode ini harus dilakukan sedikit perubahan, saya sudah mengubahnya sedemikian rupa sehingga menjadi studi kasus seperti ini.
                ") }}  <br><br>
                {{__('Studi Kasus baru')}}
                <br>
                {{__('Seorang influencer pemula telah membeli sebuah HP untuk menunjang pekerjaannya dalam membuat konten berkualitas tinggi. Budget yang dikeluarkan oleh influencer ini adalah Rp 5.000.000. Sebelumnya dia menggunakan HP iPhone sewaan, yang mana dia harus mengeluarkan budget Rp 100.000 hanya untuk membuat konten.')}}
                <br>
                {{__('Dengan HP baru ini, influencer tersebut berharap dapat meningkatkan kualitas konten yang dihasilkan, yang diharapkan dapat mendatangkan lebih banyak followers dan engagement yang lebih tinggi, serta meningkatkan potensi pendapatan melalui endorsement atau kerja sama dengan merek. Pada akhir tahun, Hp tersebut sudah turun Harga menjadi Rp 4.000.000.')}}
<br><br>

                {{__('Untuk Mengerjakan dengan metode CBA, Klik Tombol Berikut')}}{{ __("
                ") }}  <br><br>
                
            </div>
            <button onclick="window.location.href='{{ route('langkah3') }}'" 
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-7 rounded">
                Lanjut ke Langkah selanjutnya
            </button>
        </div>
    </div>
</x-Layout.layout>
