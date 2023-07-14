<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('index');
    }

    function login(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'password'=>'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib di isi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)){
            if (Auth::user()->role == 'admin'){
                return redirect('/dashbor');
            } elseif (Auth::user()->role == 'siswa'){
                return redirect('/dashboruser');
            } elseif (Auth::user()->role == 'guru') {
                return redirect('/dashboruser');
            }
        } else {
            return redirect('/')->withErrors('Username dan password yang di masukkan tidak sesuai')->withInput();
        }
    }
    
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
