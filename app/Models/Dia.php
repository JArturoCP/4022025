<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dia extends Model
{
    use SoftDeletes;

    // La tabla asociada
    protected $table = 'dias';

    // La clave primaria personalizada (en este caso 'id_dia')
    protected $primaryKey = 'id_dia';

    


    // Los campos que pueden ser asignados masivamente
    protected $fillable = ['desc_dia'];

    public $timestamps = false;


    
}
