<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $table = 'entradas'; // Forzamos el nombre de la tabla
    protected $guarded = []; // Permite guardar datos masivamente
}
