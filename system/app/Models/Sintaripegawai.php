<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Sintaripegawai extends Model
{
    protected $table = 'sintari_pegawai';
    protected $primaryKey = 'pegawai_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini
    public $timestamps = false;

    public function DataShift()
    {
        return $this->hasMany('App\Models\DataShift', 'data_pegawai');
    }
}
