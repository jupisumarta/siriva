<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SirivaPekerjaan extends Model
{
    use HasFactory;
    protected $table = 'siriva_pekerjaan';
    protected $primaryKey = 'pekerjaan_id';
}
