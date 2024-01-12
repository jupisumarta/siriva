<?php

namespace App\Http\Controllers;

// use App\Models\User;
use App\Models\Siriva;
use App\Models\SirivaPekerjaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PemeriksaanController extends Controller
{
    function index(){
        $data['list_pasien'] = Siriva::where('siriva_status_periksa','<',2)->get();
        $data['jumlahPeriksa'] = Siriva::where('siriva_status_periksa','<',2)->count();
        return view('siriva.pemeriksaan.index',$data);
    }


    function cek(Siriva $pasien){
        $data['pasien'] = $pasien;
        return view('siriva.pemeriksaan.cek',$data);
    }

    function show(Siriva $pasien){
        $data['pasien'] = $pasien;
        return view('siriva.pemeriksaan.show',$data);
    }

    function create(){
       $data['list_pekerjaan'] = SirivaPekerjaan::all();
       return view('siriva.pemeriksaan.create',$data);
   }

   function store(){
    $kirim = new Siriva;
    $kirim->siriva_status_wa = 1;
    $kirim->siriva_status_periksa = 1;
    $kirim->siriva_rm = mt_rand(111111,999999);
    $kirim->siriva_tanggal_periksa = date('Y-m-d');
    $kirim->siriva_nama_pasien = request('siriva_nama_pasien');
    $kirim->siriva_suku_pasien = request('siriva_suku_pasien');
    $kirim->siriva_alamat_pasien = request('siriva_alamat_pasien');
    $kirim->siriva_kel_pasien = request('siriva_kel_pasien');
    $kirim->siriva_suami_pasien = request('siriva_suami_pasien');
    $kirim->siriva_berat = request('siriva_berat');
    $kirim->siriva_tinggi = request('siriva_tinggi');
    $kirim->siriva_telp = request('siriva_telp');
    $kirim->siriva_kawin_pasien = request('siriva_kawin_pasien');
    $kirim->siriva_kawin_suami = request('siriva_kawin_suami');
    $kirim->siriva_pendidikan = request('siriva_pendidikan');
    $kirim->siriva_pekerjaan_pasien = request('siriva_pekerjaan_pasien');
    $kirim->siriva_pekerjaan_suami = request('siriva_pekerjaan_suami');
    $kirim->siriva_usia_haid = request('siriva_usia_haid');
    $kirim->siriva_usia_kawin = request('siriva_usia_kawin');
    $kirim->siriva_usia_hamil = request('siriva_usia_hamil');
    $kirim->siriva_hpht = request('siriva_hpht');
    $kirim->siriva_hp = request('siriva_hp');
    $kirim->siriva_ht = request('siriva_ht');
    $kirim->siriva_manopause = request('siriva_manopause');
    $kirim->siriva_manopause_umur = request('siriva_manopause_umur');
    $kirim->siriva_siklus_haid = request('siriva_siklus_haid');
    $kirim->siriva_jumlah_melahirkan = request('siriva_jumlah_melahirkan');
    $kirim->siriva_menyusui = request('siriva_menyusui');
    $kirim->siriva_caesar = request('siriva_caesar');
    $kirim->siriva_keguguran = request('siriva_keguguran');
    $kirim->siriva_keluarga_kanker = request('siriva_keluarga_kanker');
    $kirim->siriva_siapa = request('siriva_siapa');
    $kirim->siriva_kanker = request('siriva_kanker');
    $kirim->siriva_kanker_nama = request('siriva_kanker_nama');
    $kirim->siriva_cairan = request('siriva_cairan');
    $kirim->siriva_nyeri = request('siriva_nyeri');
    $kirim->siriva_nyeri = request('siriva_nyeri');
    $kirim->siriva_darah_luar = request('siriva_darah_luar');
    $kirim->siriva_benjolan = request('siriva_benjolan');
    $kirim->siriva_nyeri_payudara = request('siriva_nyeri_payudara');
    $kirim->siriva_cairan_abnormal = request('siriva_cairan_abnormal');
    $kirim->siriva_hpht = request('siriva_hpht');
    $kirim->siriva_lain = request('siriva_lain');

    $kirim->siriva_curiga_kanker = request('siriva_curiga_kanker');
    $kirim->siriva_lain = request('siriva_lain');
    $kirim->siriva_iva_pap_smear = request('siriva_iva_pap_smear');
    $kirim->siriva_iva_lain = request('siriva_iva_lain');
    $kirim->siriva_probekrio = request('siriva_probekrio');
    $kirim->siriva_antibiotik = request('siriva_antibiotik');
    $kirim->siriva_keadaan = request('siriva_keadaan');


    $kirim->siriva_payudara_kiri_1 = request('siriva_payudara_kiri_1');
    $kirim->siriva_payudara_kiri_2 = request('siriva_payudara_kiri_2');
    $kirim->siriva_payudara_kiri_3 = request('siriva_payudara_kiri_3');
    $kirim->siriva_payudara_kiri_4 = request('siriva_payudara_kiri_4');

    $kirim->siriva_payudara_kanan_1 = request('siriva_payudara_kanan_1');
    $kirim->siriva_payudara_kanan_2 = request('siriva_payudara_kanan_2');
    $kirim->siriva_payudara_kanan_3 = request('siriva_payudara_kanan_3');
    $kirim->siriva_payudara_kanan_4 = request('siriva_payudara_kanan_4');
    $kirim->save();

    $url = 'pemeriksaan/'.$kirim->siriva_id.'/detail';

    return redirect($url)->with('success','Data berhasil terkirim');
}


function proses(Siriva $pasien){
   $pasien->siriva_status_periksa = 2;
   $pasien->sadanis_normal = request('sadanis_normal') ?? 0;
   $pasien->sadanis_benjolan = request('sadanis_benjolan') ?? 0;
   $pasien->sadanis_kanker_payudara = request('sadanis_kanker_payudara') ?? 0;
   $pasien->sadanis_kelainan = request('sadanis_kelainan') ?? 0;
   $pasien->sadanis_anjuran_bulan = request('sadanis_anjuran_bulan') ?? 0;
   $pasien->sadanis_anjuran_tahun = request('sadanis_anjuran_tahun') ?? 0;
   $pasien->sadanis_anjuran_usg = request('sadanis_anjuran_usg') ?? 0;
   $pasien->sadanis_anjuran_mammografi = request('sadanis_anjuran_mammografi') ?? 0;
   $pasien->iva_normal = request('iva_normal') ?? 0;
   $pasien->iva_servistis = request('iva_servistis') ?? 0;
   $pasien->iva_positif = request('iva_positif') ?? 0;
   $pasien->iva_lesi_luas = request('iva_lesi_luas') ?? 0;
   $pasien->iva_kanker_serviks = request('iva_kanker_serviks') ?? 0;
   $pasien->iva_lain = request('iva_lain') ?? 0;
   $pasien->iva_anjuran_3 = request('iva_anjuran_3') ?? 0;
   $pasien->iva_anjuran_pap = request('iva_anjuran_pap') ?? 0;
   $pasien->krioterapi_tanggal = request('krioterapi_tanggal');
   $pasien->siriva_rujukan = request('siriva_rujukan') ?? 0;
   $pasien->iva_kontrol_ulang = request('iva_kontrol_ulang') ?? 0;
   $pasien->save();
   return redirect('pemeriksaan')->with('success','Pasien telah diperoses');
}
}
