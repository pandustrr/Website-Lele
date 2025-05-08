<div class="relative bg-white rounded-lg p-6 w-full max-w-md mx-auto shadow-lg">
    <!-- Header Modal -->
    <div class="flex justify-between items-center mb-4 pb-2 border-b">
        <h3 class="text-xl font-semibold text-gray-800">Edit Data Panen</h3>
        <button type="button" onclick="closeEditModal()" class="text-gray-500 hover:text-gray-700 focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Form Edit -->
    <form id="editPanenForm" action="{{ route('panen.update', $panen->id) }}" method="POST"
        onsubmit="event.preventDefault(); submitEditForm(this, 'panen')">
        @csrf
        @method('PUT')

        <div class="space-y-4">
            <!-- Tanggal -->
            <div>
                <label for="edit-tanggal-panen" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Panen</label>
                <input type="date" name="tanggal" id="edit-tanggal-panen" required
                    class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    value="{{ $panen->tanggal->format('Y-m-d') }}">
            </div>

            <!-- Kuantitas -->
            <div>
                <label for="edit-kuantitas-panen" class="block text-sm font-medium text-gray-700 mb-1">Kuantitas (kg)</label>
                <input type="number" name="kuantitas" id="edit-kuantitas-panen" min="1" required
                    class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    value="{{ $panen->kuantitas }}">
            </div>
        </div>

        <!-- Footer Modal -->
        <div class="mt-6 flex justify-end gap-3 pt-4 border-t">
            <button type="button" onclick="closeEditModal()"
                class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                Batal
            </button>
            <button type="submit"
                class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
