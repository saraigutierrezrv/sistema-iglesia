<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    protected $table = 'salidas';
    protected $guarded = [];

    // Esta relación es la magia
    public function becario()
    {
        return $this->belongsTo(Becario::class);
    }
}
