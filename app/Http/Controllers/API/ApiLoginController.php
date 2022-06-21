<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Controllers\Controller as Controller;

class ApiLoginController extends Controller
{
    public function index()
    {
        return ([
            'active' => 'login',
            'title' => 'login',
        ]);
    }

    public function authenticate(Request $request)
    {
        // $credentials = $request->validate([
        //     'email' => 'required|email:dns',
        //     'password' => 'required',


        // ]);

        // if (Auth::attempt($credentials)) {
        //     // $request->session()->regenerate();
        //     // return redirect()->intended('/');
        //     return ("Login Berhasil");
        // }
        // // return back()->with('loginError', 'Login Failed');
        // return ("Login Gagal");

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->guard('member')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            $member_id = auth()->guard('member')->user()->id;

            return (array('member_id' => $member_id, 'status_login' => 'Login Berhasil'));
        } else {
            return (array('member_id' => -1, 'status_login' => 'Login Gagal'));
        }
    }


    public function logout(Request $request)
    {
        // Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        Auth::guard('member')->logout();

        return (array('status_logout' => 'Logout Berhasil'));
        // return ("Logout Berhasil");
    }
}
