<x-Layout.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-s text-gray-800 dark:text-gray-200 leading-tight"></h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 align-center dark:text-gray-100 text-sm">
                <h3 class="text-lg font-semibold">{{ __('Hasil Perhitungan AHP') }}</h3>
                <table class="w-full border-collapse border">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">{{ __('Nama Barang') }}</th>
                            <th class="border px-4 py-2">{{ __('Total Nilai') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hasil as $barang)
                            <tr>
                                <td class="border px-4 py-2">{{ $barang['nama'] }}</td>
                                <td class="border px-4 py-2">{{ number_format($barang['total'], 4) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table><br>
                <h3 class="text-l font-semibold">{{ __('Anda bisa menilai dengan barang yang memiliki Total nilai tertinggi maka dia yang paling layak') }}</h3>
            </div>
        </div>
    </div>
</x-Layout.layout>
