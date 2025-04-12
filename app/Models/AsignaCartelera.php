<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignaCartelera extends Model
{
    use HasFactory;

    protected $table = 'asigna_cartelera'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_asignac'; // Clave primaria

    protected $fillable = [
        'id_pelicula',
        'id_cine',
        'id_dia',
        'id_hora',
        'id_proyeccion',
        'fi',
        'ff',
    ]; // Campos que se pueden asignar masivamente

}

