<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MobilKecil;

class MobilKecilController extends Controller
{
    public function index()
    {
        $prods = MobilKecil::get();
        // return view('/product/bus', ['list' => $prods]);
        return view('product.mobilkecil', ['list' => $prods]);
    }

    public function create()
    {
        return view('product.form', [
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
        return redirect('/product/mobilkecil')->with('msg', 'Tambah berhasil');
    }

    public function show($id)
    {
        return MobilKecil::find($id);
    }

    public function edit($id)
    {
        return view('product.form', [
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
        return redirect('/product/mobilkecil')->with('msg', 'Edit berhasil');
    }

    public function destroy($id)
    {
        MobilKecil::destroy($id);
        // atau
        /* $prod = Product::find($id);
        $prod->delete(); */
        return redirect('/product/mobilkecil')->with('msg', 'Hapus berhasil');
    }
}
