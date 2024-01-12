<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siriva extends Model
{
    use HasFactory;
    protected $table = 'siriva';
    protected $primaryKey = 'siriva_id';


    public function getSirivaCairanAttribute()
    {
        return $this->attributes['siriva_cairan'] == 0 ? 'Tidak' : 'Ya';
    }

     public function getSirivaCaesarAttribute()
    {
        return $this->attributes['siriva_caesar'] == 0 ? 'Tidak' : 'Ya';
    }

       public function getSirivaSiklusHaidAttribute()
    {
        return $this->attributes['siriva_siklus_haid'] == 0 ? 'Tidak Teratur' : 'Teratur';
    }

       public function getSirivaKeguguranAttribute()
    {
        return $this->attributes['siriva_keguguran'] == 0 ? 'Tidak' : 'Ya';
    }
       public function getSirivaMenyusuiAttribute()
    {
        return $this->attributes['siriva_menyusui'] == 0 ? 'Tidak' : 'Ya';
    }

        public function getSirivaKeluargaKankerAttribute()
    {
        return $this->attributes['siriva_keluarga_kanker'] == 0 ? 'Tidak' : 'Ya';
    }

        public function getSirivaDarahAttribute()
    {
        return $this->attributes['siriva_darah'] == 0 ? 'Tidak' : 'Ya';
    }
    public function getSirivaDarahLuarAttribute()
    {
        return $this->attributes['siriva_darah_luar'] == 0 ? 'Tidak' : 'Ya';
    }

      public function getSirivaBenjolanAttribute()
    {
        return $this->attributes['siriva_benjolan'] == 0 ? 'Tidak' : 'Ya';
    }

     public function getSirivaNyeriPayudaraAttribute()
    {
        return $this->attributes['siriva_nyeri_payudara'] == 0 ? 'Tidak' : 'Ya';
    }




     public function getSirivaKawinPasienAttribute()
    {
        $statusPasien = $this->attributes['siriva_kawin_pasien'];

        switch ($statusPasien) {
            case 1:
                return 'Kawin';
            case 2:
                return 'Belum Kawin';
            case 3:
                return 'Janda';
            default:
                return 'Tidak Diketahui';
        }
    }

      public function getSirivaKawinSuamiAttribute()
    {
        $statusPasien = $this->attributes['siriva_kawin_suami'];

        switch ($statusPasien) {
            case 1:
                return 'Kawin';
            case 2:
                return 'Belum Kawin';
            case 3:
                return 'Janda';
            default:
                return 'Tidak Diketahui';
        }
    }
}
