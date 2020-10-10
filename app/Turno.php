<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $table = 'turnos';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function horarios()
    {
        return $this->hasMany('App\Horario');
    }
}
