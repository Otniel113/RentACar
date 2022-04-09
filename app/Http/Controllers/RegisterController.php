<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:12|unique:users',
            'password' => 'required|min:5|max:12',
            'email' => 'required|email|unique:users',
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        $request->session()->flash('success', 'Registration Success');
        return redirect('login');
    }
}
