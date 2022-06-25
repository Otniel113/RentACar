<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Http\Controllers\Controller as Controller;

class ApiMemberController extends Controller
{
    public function index()
    {
        $prods = Member::get();
        return $prods;
    }

    public function create()
    {
        return ([
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'profile'
        ]);
    }

    public function store(Request $request)
    {
        $prod = new Member;
        $prod->name = $request->name;
        $prod->email = $request->email;
        $prod->username = $request->username;
        $prod->password = $request->password;
        $prod->save();
        return $prod;
    }

    public function show($id)
    {
        return Member::find($id);
    }

    public function edit($id)
    {
        return ([
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => "profile/$id",
            'data' => Member::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $prod = Member::find($id);
        $prod->name = $request->name;
        $prod->email = $request->email;
        $prod->username = $request->username;
        $prod->password = bcrypt($request->password);
        $prod->save();
        return $prod;
    }

    public function destroy($id)
    {
        Member::destroy($id);
        // atau
        /* $prod = Product::find($id);
        $prod->delete(); */
        return null;
    }
}
