<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Horario_proyeccion extends Model
{
    use softDeletes;

    protected $table = 'peliculas';
    protected $primaryKey = 'id_pelicula';
    public $timestamps = false;
}
