<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table = 'formularios';
    protected $fillable = [
        'respuestaBinaria',
        'respuestaTextual',
        'respuestaNumerica',
        'respuestaDecimal',
        'status',
        'componenteDeFormulario_id',
        'entrada_id',
        'alumno_id',
        'ficha_id',
    ];

    public function componenteDeFormulario()
    {
        return $this->hasMany('App\ComponenteDeFormulario');
    }

    public function entrada()
    {
        return $this->hasMany('App\Entrada');
    }

    public function alumno()
    {
        return $this->hasMany('App\Alumno');
    }

    public function ficha()
    {
        return $this->hasMany('App\Ficha');
    }

}
