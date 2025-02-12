\<x-Layout.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-s text-gray-800 dark:text-gray-200 leading-tight"></h2>
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 align-center dark:text-gray-100 text-sm">
                    <h3 class="text-lg font-semibold">{{ __('Step 6') }}</h3>
                    <p>{{ __('{ Memasukkan Barang yang ingin dipertimbangkan }') }}</p>
                    <br>
                    <p>
                        {{ __("Selanjutnya, masukkan opsi barang yang ingin dipertimbangkan untuk kelayakannya. Setelah itu, sistem akan melakukan:") }}
                    </p>
                    <ul class="list-disc ml-6">
                        <li>{{ __('Mengkategorikan dia termasuk dalam kategori kriteria yang mana.') }}</li>
                        <li>{{ __('Melakukan perkalian dari nilai kategori dan matriks nilai.') }}</li>
                        <li>{{ __('Melakukan total lalu meranking atau mengurutkan mana yang layak ke tidak layak.') }}</li>
                    </ul>
                    <br>

                    <!-- Form untuk memasukkan barang -->
                    <form action="{{ route('ahp.calculate') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                            {{ __('Lanjutkan ke Langkah Berikutnya') }}
                        </button>
                        @for ($i = 1; $i <= 3; $i++)
                            <div class="mb-4">
                                <h4 class="text-md font-semibold">{{ __("Barang $i") }}</h4>
                                <label class="block mt-2">
                                    {{ __('Nama Barang') }}:
                                    <input type="text" name="barang[{{ $i }}][nama]" required
                                        class="w-full border rounded p-2 mt-1">
                                </label>

                                <label class="block mt-2">
                                    {{ __('Kamera (MP)') }}:
                                    <input type="number" name="barang[{{ $i }}][kamera]" step="1" required
                                        class="w-full border rounded p-2 mt-1">
                                </label>

                                <label class="block mt-2">
                                    {{ __('Memori (GB)') }}:
                                    <input type="number" name="barang[{{ $i }}][memori]" step="1" required
                                        class="w-full border rounded p-2 mt-1">
                                </label>

                                <label class="block mt-2">
                                    {{ __('Baterai (mAh)') }}:
                                    <input type="number" name="barang[{{ $i }}][baterai]" step="1" required
                                        class="w-full border rounded p-2 mt-1">
                                </label>

                                <label class="block mt-2">
                                    {{ __('Layar (inch)') }}:
                                    <input type="number" name="barang[{{ $i }}][layar]" step="0.1" required
                                        class="w-full border rounded p-2 mt-1">
                                </label>

                                <label class="block mt-2">
                                    {{ __('Editing') }}:
                                    <select name="barang[{{ $i }}][editing]" required
                                        class="w-full border rounded p-2 mt-1">
                                        <option value="optimal">{{ __('Optimal') }}</option>
                                        <option value="tidak optimal">{{ __('Tidak Optimal') }}</option>
                                        <option value="tidak bisa">{{ __('Tidak Bisa') }}</option>
                                    </select>
                                </label>
                            </div>
                        @endfor

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-Layout.layout>
