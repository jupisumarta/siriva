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
        if (Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('/');
        } else {
            return back();
        }
    }
    function logout(){
        Auth::logout();
        return redirect('login');
    }
}

