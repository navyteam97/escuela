<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $table = 'entradas';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function formularios()
    {
        return $this->hasMany('App\Formulario');
    }
}
