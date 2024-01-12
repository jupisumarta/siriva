<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;

    protected $table = 'siriva_pemeriksa';
    protected $primaryKey = 'pemeriksa_id';

    public $timestamps = false;
}
