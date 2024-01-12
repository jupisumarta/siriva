<?php
namespace App\Models

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SirivaPemeriksaan extends Model
{
    use HasFactory;
     protected $table = 'siriva_pemeriksaan';
    protected $primaryKey = 'pemeriksaan_id';
}
