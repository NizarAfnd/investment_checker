<x-Layout.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-s text-gray-800 dark:text-gray-200 leading-tight"></h2>
    </x-slot>

    <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Hasil Perhitungan</h1>
        <table class="table-auto w-full border-collapse border border-gray-200">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Nama Barang</th>
                    <th class="border px-4 py-2">Total Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hasil as $item)
                    <tr>
                        <td class="border px-4 py-2">{{ $item['nama'] }}</td>
                        <td class="border px-4 py-2">{{ number_format($item['total'], 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h3 class="text-l font-semibold">{{ __('Anda bisa menilai dengan barang yang memiliki Total nilai tertinggi maka dia yang paling layak') }}</h3>

    </div>
</x-Layout.layout>
