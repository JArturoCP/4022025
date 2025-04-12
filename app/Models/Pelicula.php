<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Pelicula extends Model
{
    //
    use SoftDeletes;


    protected $table = 'peliculas';
    protected $primaryKey = 'id_pelicula';
    protected $fillable = ['titulo','id_clasificacion','id_genero','id_idioma','id_director','duracion','imagen'];

}
