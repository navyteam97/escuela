<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagenes';
    protected $fillable = [
        'descripcion',
        'status',
        'persona_id',
        'carrera_id',
        'cajaCurricular_id',
        'tipoDeImagen_id',
    ];

    public function cajaCurricular()
    {
        return $this->belongsTo('App\CajaCurricular');
    }

    public function carrera()
    {
        return $this->belongsTo('App\Carrera');
    }

    public function persona()
    {
        return $this->belongsTo('App\persona');
    }

    public function tipoDeImagen()
    {
        return $this->belongsTo('App\TipoDeImagen');
    }
}
