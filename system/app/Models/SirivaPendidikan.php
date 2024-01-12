<?php

namespace App\Models

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SirivaPendidikan extends Model
{
    use HasFactory;
    protected $table = 'siriva_pendidikan';
    protected $primaryKey = 'pendidikan_id';
}
