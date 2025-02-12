<x-Layout.layout> 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 align-center dark:text-gray-100 text-2xl">
                {{__('Langkah 2: Tentukan Biaya dan Manfaat')}} 
                <br><br>
                {{__("Masukkan pendapatan endorsement dan harga jual kembali HP untuk menghitung manfaat dan ROI.")}} 
                <br><br>

                <!-- Form Input -->
                <form id="form" action="#" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="pendapatan_endorsement" class="block text-sm font-medium text-gray-700">{{ __('Pendapatan Endorsement (Rp)') }}</label>
                        <input type="number" id="pendapatan_endorsement" name="pendapatan_endorsement" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="harga_jual_kembali" class="block text-sm font-medium text-gray-700">{{ __('Harga Jual Kembali HP (Rp)') }}</label>
                        <input type="number" id="harga_jual_kembali" name="harga_jual_kembali" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>

                    <button type="button" id="hitung" onclick="hitungManfaat()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Hitung
                    </button>
                </form>

                <br><br>

                <!-- Output Perhitungan -->
                <div id="output" style="display:none;">
                    <p><strong>Total Manfaat: </strong>Rp <span id="total_manfaat"></span></p>
                    <p><strong>Manfaat Bersih: </strong>Rp <span id="manfaat_bersih"></span></p>
                    <p><strong>ROI: </strong><span id="roi"></span>%</p>
                </div>

                <!-- Tombol Lanjut -->
                <button id="lanjut" onclick="window.location.href='{{ route('langkah3') }}'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-7 rounded" style="display:none;">
                    Lanjut ke Langkah Selanjutnya
                </button>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk menghitung manfaat dan ROI
        function hitungManfaat() {
            const biaya_pembelian_hp = 5000000; // Biaya pembelian HP Rp 5.000.000
            const penghematan_biaya_sewa_hp = 1200000; // Penghematan biaya sewa HP Rp 1.200.000 per tahun

            // Ambil nilai input dari pengguna
            const pendapatan_endorsement = parseFloat(document.getElementById('pendapatan_endorsement').value);
            const harga_jual_kembali = parseFloat(document.getElementById('harga_jual_kembali').value);

            // Perhitungan Total Manfaat dan Manfaat Bersih
            const total_manfaat = penghematan_biaya_sewa_hp + pendapatan_endorsement + harga_jual_kembali;
            const manfaat_bersih = total_manfaat - biaya_pembelian_hp;

            // Perhitungan ROI
            const roi = (manfaat_bersih / biaya_pembelian_hp) * 100;

            // Tampilkan hasil
            document.getElementById('total_manfaat').textContent = total_manfaat.toFixed(2);
            document.getElementById('manfaat_bersih').textContent = manfaat_bersih.toFixed(2);
            document.getElementById('roi').textContent = roi.toFixed(2);

            // Tampilkan output dan tombol lanjutkan
            document.getElementById('output').style.display = 'block';
            document.getElementById('lanjut').style.display = 'inline-block';
        }
    </script>
</x-Layout.layout>
