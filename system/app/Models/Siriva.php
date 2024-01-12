<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siriva extends Model
{
    use HasFactory;
    
    protected $table = 'siriva';
    protected $primaryKey = 'siriva_id';

    public $timestamps = false;
}
