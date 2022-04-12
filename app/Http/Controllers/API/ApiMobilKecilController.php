<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\MobilKecil;

class ApiMobilKecilController
{
    public function index()
    {
        $prods = MobilKecil::get();
        return $prods;
    }

    public function create()
    {
        return ([
        'title' => 'Tambah',
        'method' => 'POST',
        'action' => 'product/mobilkecil'
        ]);
    }

    public function store(Request $request)
    {
        $prod = new MobilKecil;
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
        return MobilKecil::find($id);
    }

    public function edit($id)
    {
        return ([
        'title' => 'Edit',
        'method' => 'PUT',
        'action' => "product/mobilkecil/$id",
        'data' => MobilKecil::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $prod = MobilKecil::find($id);
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
        MobilKecil::destroy($id);
        // atau
        /* $prod = Product::find($id);
        $prod->delete(); */
        return null;
    }
}
