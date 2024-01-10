<?php

namespace App\Http\Controllers;

// use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    function dashboard(){

        return view('welcome');
    }

    //yang ku comment ni boleh kau hapus itu cume untuk buat user login jadi nnti hapus yak function store nin dengan yang di file welcome nn

    // function store(){
    //     $user = new User;
    //     $user ->user_username = request('user_username');
    //     $user ->user_password = bcrypt (request('user_password'));
    //     $user->save();

    //     return back();
    // }
}
