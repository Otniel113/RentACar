<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MobilBesar;

class MobilBesarController extends Controller
{
    public function index()
    {
        $prods = MobilBesar::get();
        return view('product.mobilbesar', ['list' => $prods]);
    }

    public function create()
    {
        return view('product.form', [
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
        return redirect('/product/mobilbesar')->with('msg', 'Tambah berhasil');
    }

    public function show($id)
    {
        return MobilBesar::find($id);
    }

    public function edit($id)
    {
        return view('product.form', [
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
        return redirect('/product/mobilbesar')->with('msg', 'Edit berhasil');
    }

    public function destroy($id)
    {
        MobilBesar::destroy($id);
        // atau
        /* $prod = Product::find($id);
        $prod->delete(); */
        return redirect('/product/mobilbesar')->with('msg', 'Hapus berhasil');
    }
}
