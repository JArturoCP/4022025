<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $table = 'peliculas';
    protected $primaryKey = 'id_pelicula';
    protected $fillable = [
        'titulo',
        'id_clasificacion',
        'id_genero',
        'id_idioma',
        'id_director',
        'duracion',
        'imagen'
    ];

    // Relaciones
    public function genero()
    {
        return $this->belongsTo(Genero::class, 'id_genero');
    }

    public function clasificacion()
    {
        return $this->belongsTo(Clasificacion::class, 'id_clasificacion');
    }
    
    public function idioma()
    {
        return $this->belongsTo(Idioma::class, 'id_idioma');
    }

    public function director()
    {
        return $this->belongsTo(Director::class, 'id_director');
    }
}