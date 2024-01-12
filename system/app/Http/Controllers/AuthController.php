<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showLogin()
    {
        return view('login');
    }
    function prosesLogin()
    {
        if (Auth::attempt(['username' => request('username'), 'password' => request('password'), 'akses_kantorkite' => '1'])) {
            

            return redirect('/')->with('success', 'Selamat datang di aplikasi manajemen data pegawai');
        } else {
            return back()->with('error', 'Login gagal. Silahkan cek username dan password anda!');
        }
    }
    function logout(){
        Auth::logout();
        return redirect('login');
    }
}

