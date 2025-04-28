<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hora extends Model
{
    use softDeletes;
    protected $table = 'horas';
    protected $primaryKey = 'id_hora';
    protected $fillable = ['descripcion_h'];
}
