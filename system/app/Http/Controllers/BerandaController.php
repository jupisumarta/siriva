<?php

namespace App\Http\Controllers;

// use App\Models\User;
use App\Models\Pasien;
use App\Models\Siriva;
use App\Models\Periksa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    function dashboard(){
        $data['ivaPlus'] = Siriva::where('iva_positif',1)->count();
        $data['curigaKanker'] = Siriva::where('siriva_curiga_kanker',1)->count();
        $data['pencapaian'] = Siriva::where('siriva_status_periksa',2)->count();
        $data['lesiLuas'] = Siriva::where('iva_lesi_luas',1)->count();
        return view('siriva.dashboard',$data);
    }

    function periksa(){

        return view('siriva.periksa');
    }
    
    function pasien(){

        return view('siriva.pasien');
    }
    
    function periksaData(){

        return view('siriva.periksa-data');
    }
    
    
    function storePeriksaData(Request $request){
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            // Sesuaikan dengan field-field yang ada pada formulir
            'siriva_status_periksa' => 'required|string',
            'siriva_status_wa' => 'required|string',
            'siriva_rm' => 'required|string',
            'siriva_nama_pasien' => 'required|string',
            'siriva_suku_pasien' => 'required|string',
            'siriva_alamat_pasien' => 'required|string',
            'siriva_kel_pasien' => 'required|string',
            'siriva_suami_pasien' => 'required|string',
            'siriva_berat' => 'required|required|numeric|regex:/^\d{1,8}(\.\d{1,2})?$/',
            'siriva_tinggi' => 'required|numeric|regex:/^\d{1,8}(\.\d{1,2})?$/',
            'siriva_telp' => 'required|string',
            'siriva_kawin_pasien' => 'required|string',
            'siriva_kawin_suami' => 'required|string',
            'siriva_pendidikan' => 'required|string',
            'siriva_pekerjaan_pasien' => 'required|string',
            'siriva_pekerjaan_suami' => 'required|string',
            'siriva_usia_haid' => 'required|string',
            'siriva_usia_kawin' => 'required|string',
            'siriva_usia_hamil' => 'required|string',
            'siriva_hpht' => 'required|string',
            'siriva_manopause' => 'required|string',
            'siriva_manopause_umur' => 'required|string',
            'siriva_siklus_haid' => 'required|string',
            'siriva_jumlah_melahirkan' => 'required|string',
            'siriva_menyusui' => 'required|string',
            'siriva_caesar' => 'required|string',
            'siriva_keguguran' => 'required|string',
            'siriva_keluarga_kanker' => 'required|string',
            'siriva_siapa' => 'required|string',
            'siriva_kanker' => 'required|string',
            'siriva_kanker_nama' => 'required|string',
            'siriva_cairan' => 'required|string',
            'siriva_nyeri' => 'required|string',
            'siriva_darah' => 'required|string',
            'siriva_darah_luar' => 'required|string',
            'siriva_benjolan' => 'required|string',
            'siriva_nyeri_payudara' => 'required|string',
            'siriva_carian_abnormal' => 'required|string',
            'siriva_lain' => 'required|string',
            'siriva_curiga_kanker' => 'required|string',
            'siriva_ssk' => 'required|string',
            'siriva_iva_lain' => 'required|string',
            'siriva_probekrio' => 'required|string',
            'siriva_antibiotik' => 'required|string',
            'siriva_keadaan' => 'required|string',
            'siriva_payudara_kiri_1' => 'required|string',
            'siriva_payudara_kiri_2' => 'required|string',
            'siriva_payudara_kiri_3' => 'required|string',
            'siriva_payudara_kiri_4' => 'required|string',
            'siriva_payudara_kanan_1' => 'required|string',
            'siriva_payudara_kanan_2' => 'required|string',
            'siriva_payudara_kanan_3' => 'required|string',
            'siriva_payudara_kanan_4' => 'required|string',
            'siriva_user' => 'required|string',
            'sadanis_normal' => 'required|string',
            'sadanis_benjolan' => 'required|string',
            'sadanis_kanker_payudara' => 'required|string',
            'sadanis_kelainan' => 'required|string',
            'sadanis_anjuran_bulan' => 'required|string',
            'sadanis_anjuran_tahun' => 'required|string',
            'sadanis_anjuran_usg' => 'required|string',
            'sadanis_anjuran_mammografi' => 'required|string',
            'iva_normal' => 'required|string',
            'iva_servistis' => 'required|string',
            'iva_positif' => 'required|string',
            'iva_lesi_luas' => 'required|string',
            'iva_kanker_serviks' => 'required|string',
            'iva_lain' => 'required|string',
            'iva_anjuran_3' => 'required|string',
            'iva_anjuran_pap' => 'required|string',
            'siriva_rujukan' => 'required|string'
            // ... tambahkan field lainnya sesuai kebutuhan
        ]);
        return redirect()->route('siriva.periksa-data')->with('success', 'Data berhasil disimpan');
    }
    
    function periksaPasien(Pasien $pasien){
        $data['pasien'] = $pasien;
        
        return view('siriva.periksa-pasien');
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
