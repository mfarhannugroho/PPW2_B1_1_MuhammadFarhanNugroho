<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    
    public function show()
    {
        $table = barang::all();
        return view('barang.barang', compact('table'));
    }

    
}
