<?php
namespace App\Models

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SirivaDesa extends Model
{
    use HasFactory;
    protected $table = 'siriva_desa';
    protected $primaryKey = 'desa_id';
}
