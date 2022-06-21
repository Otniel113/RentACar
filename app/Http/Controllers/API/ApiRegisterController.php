<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Http\Controllers\Controller as Controller;

class ApiRegisterController extends Controller
{

    public function store(Request $request)
    {
        $prod = new Member;
        $prod->name = $request->name;
        $prod->email = $request->email;
        $prod->username = $request->username;
        $prod->password = bcrypt($request->password);
        $prod->save();
        return $prod;
    }
}
