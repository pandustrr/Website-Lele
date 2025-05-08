<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pakan;

class PakanController extends Controller
{
    // Menampilkan form input
    public function create()
    {
        return view('components.produksi.inputs.panen-edit');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kuantitas' => 'required|integer|min:1',
            'tipe' => 'required|string|max:255',
        ]);

        Pakan::create($request->all());

        return redirect()->route('produksi')
            ->with('success', 'Data pakan berhasil disimpan!');
    }

    // Hapus data
    public function destroy($id)
    {
        $pakan = Pakan::findOrFail($id);
        $pakan->delete();

        return redirect()->route('produksi')
            ->with('success', 'Data pakan berhasil dihapus!');
    }

    // Edit data
    public function edit($id)
    {
        $pakan = Pakan::findOrFail($id);
        return view('components.produksi.inputs.pakan-edit', compact('pakan'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kuantitas' => 'required|integer|min:1',
            'tipe' => 'required|string|in:premium,standar',
        ]);

        $pakan = Pakan::findOrFail($id);
        $pakan->update($request->all());

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Data pakan berhasil diperbarui',
                'redirect' => route('produksi')
            ]);
        }

        return redirect()->route('produksi')
            ->with('success', 'Data pakan berhasil diperbarui!');
    }
}
