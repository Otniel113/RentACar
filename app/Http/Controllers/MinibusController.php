<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Minibus;

class MinibusController extends Controller
{
    public function index()
    {
        $prods = Minibus::get();
        return view('product.minibus', ['list' => $prods]);
    }

    public function create()
    {
        return view('product.form', [
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
        return redirect('/product/minibus')->with('msg', 'Tambah berhasil');
    }

    public function show($id)
    {
        return Minibus::find($id);
    }

    public function edit($id)
    {
        return view('product.form', [
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
        return redirect('/product/minibus')->with('msg', 'Edit berhasil');
    }

    public function destroy($id)
    {
        Minibus::destroy($id);
        // atau
        /* $prod = Product::find($id);
         $prod->delete(); */
        return redirect('/product/minibus')->with('msg', 'Hapus berhasil');
    }
}
