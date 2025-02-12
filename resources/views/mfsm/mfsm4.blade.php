<x-Layout.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-s text-gray-800 dark:text-gray-200 leading-tight"></h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1 class="text-2xl font-bold mb-4">Input Data Barang</h1>
                <form action="{{ route('mfsm.process') }}" method="POST">
                    @csrf
                    @for ($i = 0; $i < 3; $i++)
                        <div class="mb-6">
                            <h2 class="text-lg font-semibold mb-2">Barang {{ $i + 1 }}</h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium">Nama Barang</label>
                                    <input type="text" name="barang[{{ $i }}][nama]" class="w-full p-2 border rounded" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium">Kamera (MP)</label>
                                    <input type="number" name="barang[{{ $i }}][kamera]" class="w-full p-2 border rounded" min="1" max="9" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium">Memori (GB)</label>
                                    <input type="number" name="barang[{{ $i }}][memori]" class="w-full p-2 border rounded" min="1" max="9" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium">Baterai (mAh)</label>
                                    <input type="number" name="barang[{{ $i }}][baterai]" class="w-full p-2 border rounded" min="1" max="9" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium">Layar (inch)</label>
                                    <input type="number" name="barang[{{ $i }}][layar]" class="w-full p-2 border rounded" min="1" max="9" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium">Editing</label>
                                    <input type="number" name="barang[{{ $i }}][editing]" class="w-full p-2 border rounded" min="1" max="9" required>
                                </div>
                            </div>
                        </div>
                    @endfor
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Proses</button>
                </form>
            </div>
        </div>
    </div>
</x-Layout.layout>
