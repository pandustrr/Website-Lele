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


}
