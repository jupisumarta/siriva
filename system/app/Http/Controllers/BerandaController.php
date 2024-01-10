<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    function dashboard(){
        
        return view('dashboard');
    }
}
