<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Http\Controllers\Controller as Controller;

class ApiBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prods = Booking::get();
        return $prods;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return ([
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'booking',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prod = new Booking;
        $prod->id_mobil = $request->id_mobil;
        $prod->nama_mobil = $request->nama_mobil;
        $prod->jenis_mobil = $request->jenis_mobil;
        $prod->wisata = $request->wisata;
        $prod->id_member = $request->id_member;
        $prod->nama_member = $request->nama_member;
        $prod->status = $request->status;
        $prod->save();
        return $prod;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Booking::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return ([
        'title' => 'Edit',
        'method' => 'PUT',
        'action' => "booking/$id",
        'data' => Booking::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prod = Booking::find($id);
        $prod->id_mobil = $request->id_mobil;
        $prod->nama_mobil = $request->nama_mobil;
        $prod->jenis_mobil = $request->jenis_mobil;
        $prod->wisata = $request->wisata;
        $prod->id_member = $request->id_member;
        $prod->nama_member = $request->nama_member;
        $prod->status = $request->status;
        $prod->save();
        return $prod;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::destroy($id);
        return null;
    }
}
