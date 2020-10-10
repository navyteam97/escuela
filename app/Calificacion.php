<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = 'calificaciones';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function notas()
    {
        return $this->hasMany('App\Nota');
    }
}
