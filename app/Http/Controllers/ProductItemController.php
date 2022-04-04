<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductItemController extends Controller
{
    public function index()
    {
        return view('/product/bus');
    }

    public function home()
    {
        return view('/product/busdetails1');
    }
}
