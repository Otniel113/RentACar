<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\MobilBesar;

class ApiMobilBesarController
{
    public function index()
    {
        $prods = MobilBesar::get();
        return $prods;
    }

    public function create()
    {
        return ([
        'title' => 'Tambah',
        'method' => 'POST',
        'action' => 'product/mobilbesar'
        ]);
    }

    public function store(Request $request)
    {
        $prod = new MobilBesar;
        $prod->nama_mobil = $request->nama_mobil;
        $prod->no_polisi = $request->no_polisi;
        $prod->driver = $request->driver;
        $prod->wisata = $request->wisata;
        $prod->ketersediaan = $request->ketersediaan;
        $prod->save();
        return $prod;
    }

    public function show($id)
    {
        return MobilBesar::find($id);
    }

    public function edit($id)
    {
        return ([
        'title' => 'Edit',
        'method' => 'PUT',
        'action' => "product/mobilbesar/$id",
        'data' => MobilBesar::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $prod = MobilBesar::find($id);
        $prod->nama_mobil = $request->nama_mobil;
        $prod->no_polisi = $request->no_polisi;
        $prod->driver = $request->driver;
        $prod->wisata = $request->wisata;
        $prod->ketersediaan = $request->ketersediaan;
        $prod->save();
        return $prod;
    }

    public function destroy($id)
    {
        MobilBesar::destroy($id);
        // atau
        /* $prod = Product::find($id);
        $prod->delete(); */
        return null;
    }
}
