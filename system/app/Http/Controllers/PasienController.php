<?php

namespace App\Http\Controllers;

// use App\Models\User;
use App\Models\Pasien;
use App\Models\Siriva;
use App\Models\Periksa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PasienController extends Controller
{
    function index(){
        $data['list_pasien'] = Siriva::all();
        return view('siriva.pasien.index',$data);
    }

    function history(Siriva $pasien){
        $data['pasien'] = $pasien;
        return view('siriva.pasien.history',$data);
    }

}
