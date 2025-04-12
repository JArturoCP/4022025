<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Protagonistas extends Model
{
    use SoftDeletes;
    protected $table = 'protagonistas';
    protected $primaryKey = 'id_protagonista';

    protected $fillable = ['id_personas'];
}
