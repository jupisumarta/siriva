<?php

namespace App\Models

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SirivaPasien extends Model
{
    use HasFactory;
    protected $table = 'siriva_pasien';
    protected $primaryKey = 'pasien_id';
}
