<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Minibus;
use App\Http\Controllers\Controller as Controller;

class ApiMinibusController extends Controller
{
    public function index()
    {
        $prods = Minibus::get();
        return $prods;
    }

    public function create()
    {
        return ([
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'product/minibus',
        ]);
    }

    public function store(Request $request)
    {
        $prod = new minibus();
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
        return Minibus::find($id);
    }

    public function edit($id)
    {
        return ([
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => "product/minibus/$id",
            'data' => Minibus::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $prod = Minibus::find($id);
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
        Minibus::destroy($id);
        // atau
        /* $prod = Product::find($id);
         $prod->delete(); */
        return null;
    }
}
