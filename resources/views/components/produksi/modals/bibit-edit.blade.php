<div class="relative">
    <!-- Header Modal -->
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold text-gray-800">Edit Data Bibit</h3>
        <button onclick="closeEditModal()" class="text-gray-500 hover:text-gray-700">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Form Edit -->
    <form action="{{ route('bibit.update', $bibit->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="space-y-4">
            <!-- Field Tanggal -->
            <div>
                <label for="edit-tanggal" class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                <input type="date" name="tanggal" id="edit-tanggal" value="{{ $bibit->tanggal }}"
                    class="w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Field Kuantitas -->
            <div>
                <label for="edit-kuantitas" class="block text-sm font-medium text-gray-700 mb-1">Kuantitas (kg)</label>
                <input type="number" name="kuantitas" id="edit-kuantitas" value="{{ $bibit->kuantitas }}"
                    class="w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Field Tipe -->
            <div>
                <label for="edit-type" class="block text-sm font-medium text-gray-700 mb-1">Tipe Bibit</label>
                <select name="type" id="edit-type"
                    class="w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                    <option value="Bibit Premium" {{ $bibit->type == 'Bibit Premium' ? 'selected' : '' }}>Bibit Premium
                    </option>
                    <option value="Bibit Standar" {{ $bibit->type == 'Bibit Standar' ? 'selected' : '' }}>Bibit Standar
                    </option>
                </select>
            </div>
        </div>

        <!-- Footer Modal -->
        <div class="mt-6 flex justify-end space-x-3">
            <button type="button" onclick="closeEditModal()"
                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Batal
            </button>
            <button type="submit"
                class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
