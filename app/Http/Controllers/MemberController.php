<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $prods = Member::get();
        return view('review', ['list' => $prods]);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $prod = new Member;
        $prod->name = $request->name;
        $prod->email = $request->email;
        $prod->username = $request->username;
        $prod->save();
        return redirect('/review')->with('msg', 'Tambah berhasil');
    }

    public function show($id)
    {
        return Member::find($id);
    }

    public function edit($id)
    {
    
    }

    public function update(Request $request, $id)
    {
        $prod = Member::find($id);
        $prod->name = $request->name;
        $prod->email = $request->email;
        $prod->username = $request->username;
        $prod->save();
        return redirect('/review')->with('msg', 'Edit berhasil');
    }

    public function destroy($id)
    {
        Member::destroy($id);
        // atau
        /* $prod = Product::find($id);
        $prod->delete(); */
        return redirect('/review')->with('msg', 'Hapus berhasil');
    }
}
