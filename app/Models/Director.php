<?php

// app/Models/Director.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Director extends Model
{
    use SoftDeletes;

    protected $table = 'directores';
    protected $primaryKey = 'id_director';
    protected $fillable = ['nombre_director'];
}
