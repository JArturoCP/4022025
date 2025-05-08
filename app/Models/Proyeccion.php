<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proyeccion extends Model
{
    use SoftDeletes;

    protected $table = 'proyecciones';
    protected $primaryKey = 'id_proyeccion';
    public $timestamps = false;
    protected $fillable = ['desc_proy', 'precio'];
}
