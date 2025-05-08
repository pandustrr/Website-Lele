@extends('layouts.app')

@section('content')
    <div class="container-fluid px-3 md:px-4 py-4 transition-all duration-300" id="mainContent">

        <div class="flex flex-col md:flex-row justify-center items-start md:items-center mb-4 gap-5">
            <h1 class="text-xl md:text-2xl font-bold text-gray-800">Produksi</h1>
            <div class="w-full md:w-auto">
                @include('components.produksi.dropdownSiklus')
            </div>
        </div>

        <!-- Grid Input Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 mb-5">
            @include('components.produksi.cards.BibitCard')
            @include('components.produksi.cards.PakanCard')
            @include('components.produksi.cards.PanenCard')
        </div>

        <!-- Tables Section -->
        <div class="mt-5 space-y-5">
            <div id="bibit-table" class="bg-white rounded-lg shadow">
                <div class="px-4 py-3 border-b flex justify-between items-center">
                    <h2 class="text-lg font-semibold text-gray-800">Data Bibit</h2>
                    <div class="flex gap-2">
                        <span class="text-gray-600 text-sm">Total:
                            <span class="font-medium">{{ $dataBibit->sum('kuantitas') }} kg</span>
                        </span>
                    </div>
                </div>
                <div class="p-1 sm:p-2 md:p-3 overflow-x-auto">
                    <div class="min-w-full">
                        @include('components.produksi.tables.BibitTable', ['bibits' => $dataBibit])
                    </div>
                </div>
            </div>

            <!-- Pakan Table (Hidden by Default) -->
            <div id="pakan-table" class="hidden bg-white rounded-lg shadow">
                <div class="px-4 py-3 border-b flex justify-between items-center">
                    <h2 class="text-lg font-semibold text-gray-800">Data Pakan</h2>
                    <div class="flex gap-2">
                        <span class="text-gray-600 text-sm">Total:
                            <span class="font-medium">{{ $dataPakan->sum('kuantitas') }} kg</span>
                        </span>
                    </div>
                </div>
                <div class="p-1 sm:p-2 md:p-3 overflow-x-auto">
                    <div class="min-w-full">
                        @include('components.produksi.tables.PakanTable', ['pakans' => $dataPakan])
                    </div>
                </div>
            </div>

            <!-- Panen Table (Hidden by Default) -->
            <div id="panen-table" class="hidden bg-white rounded-lg shadow">
                <div class="px-4 py-3 border-b flex justify-between items-center">
                    <h2 class="text-lg font-semibold text-gray-800">Data Panen</h2>
                    <div class="flex gap-2">
                        <span class="text-gray-600 text-sm">Total:
                            <span class="font-medium">{{ $dataPanen->sum('kuantitas') }} kg</span>
                        </span>
                    </div>
                </div>
                <div class="p-1 sm:p-2 md:p-3 overflow-x-auto">
                    <div class="min-w-full">
                        @include('components.produksi.tables.PanenTable', ['panens' => $dataPanen])
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Fungsi untuk menampilkan tabel yang dipilih dan menyoroti card yang aktif
            function showTable(tableType) {
                // Sembunyikan semua tabel
                document.querySelectorAll('#bibit-table, #pakan-table, #panen-table').forEach(el => {
                    el.classList.add('hidden');
                });

                // Tampilkan tabel yang dipilih
                document.getElementById(tableType + '-table').classList.remove('hidden');

                // Reset semua card ke tampilan normal
                document.querySelectorAll('#bibit-card, #pakan-card, #panen-card').forEach(card => {
                    card.classList.remove('border-blue-500', 'border-green-500', 'border-orange-500');
                    card.classList.add('border-gray-100');
                });

                // Tambahkan highlight pada card yang dipilih
                const selectedCard = document.getElementById(tableType + '-card');
                if (selectedCard) {
                    selectedCard.classList.remove('border-gray-100');

                    // Tambahkan border berwarna sesuai jenis card
                    if (tableType === 'bibit') {
                        selectedCard.classList.add('border-blue-500');
                    } else if (tableType === 'pakan') {
                        selectedCard.classList.add('border-green-500');
                    } else if (tableType === 'panen') {
                        selectedCard.classList.add('border-orange-500');
                    }
                }

                // Scroll halus ke tabel
                document.getElementById(tableType + '-table').scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }

            // Inisialisasi saat halaman dimuat
            document.addEventListener('DOMContentLoaded', function() {

                // Penyesuaian layout responsif
                const adjustLayout = () => {
                    const mainContent = document.getElementById('mainContent');
                    mainContent.classList.add('min-w-[320px]');
                };

                adjustLayout();
                window.addEventListener('resize', adjustLayout);
            });
        </script>
    </div>
@endsection
