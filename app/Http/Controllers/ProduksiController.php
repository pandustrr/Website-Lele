<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bibit;
use App\Models\Pakan;
use App\Models\Panen;

class ProduksiController extends Controller
{
    public function index()
    {
        $dataBibit = Bibit::latest()->get();
        $dataPakan = Pakan::latest()->get();
        $dataPanen = Panen::latest()->get();

        return view('produksi', compact('dataBibit', 'dataPakan', 'dataPanen'));
    }
    // Fungsi untuk menghapus data bibit
    public function destroyBibit($id)
    {
        Bibit::destroy($id);
        return redirect()->back()->with('success', 'Data bibit berhasil dihapus.');
    }

    // Fungsi untuk menghapus data pakan
    public function destroyPakan($id)
    {
        Pakan::destroy($id);
        return redirect()->back()->with('success', 'Data pakan berhasil dihapus.');
    }

    // Fungsi untuk menghapus data panen
    public function destroyPanen($id)
    {
        Panen::destroy($id);
        return redirect()->back()->with('success', 'Data panen berhasil dihapus.');
    }


}
