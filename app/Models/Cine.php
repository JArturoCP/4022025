<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cine extends Model
{
    protected $table = 'cines';
    protected $primaryKey = 'id_cine';
    protected $fillable = ['nombre_c', 'dir', 'tel', 'id_ciudad'];
    public $timestamps = false;
}