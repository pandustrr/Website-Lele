<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panen;

class PanenController extends Controller
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
        ]);

        Panen::create($request->all());

        return redirect()->route('produksi')
            ->with('success', 'Data panen berhasil disimpan!');
    }

    // Hapus data
    public function destroy($id)
    {
        $panen = Panen::findOrFail($id);
        $panen->delete();

        return redirect()->route('produksi')
            ->with('success', 'Data panen berhasil dihapus!');
    }

public function edit($id)
{
    try {
        $panen = Panen::findOrFail($id);

        // Untuk request AJAX, kembalikan hanya konten form
        if (request()->ajax()) {
            return view('components.produksi.inputs.panen-edit', compact('panen'))->render();
        }

        return view('components.produksi.inputs.panen-edit', compact('panen'));
    } catch (\Exception $e) {
        if (request()->ajax()) {
            return response()->json(['error' => 'Data not found'], 404);
        }
        abort(404);
    }
}

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kuantitas' => 'required|integer|min:1',
        ]);

        $panen = Panen::findOrFail($id);
        $panen->update($request->all());

        // Kembalikan response sesuai kebutuhan (AJAX atau bukan)
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Data panen berhasil diperbarui',
                'redirect' => route('produksi')
            ]);
        }

        return redirect()->route('produksi')
            ->with('success', 'Data panen berhasil diperbarui');
    }
}
