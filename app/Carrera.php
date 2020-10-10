<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carreras';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function cajaCurricular()
    {
        return $this->belongsTo('App\CajaCurricular');
    }

    public function carreraInscripcion()
    {
        return $this->belongsTo('App\CarreraInscripcion');
    }

    public function carreraInstitucion()
    {
        return $this->belongsTo('App\CarreraInstitucion');
    }

    public function imagen()
    {
        return $this->belongsTo('App\Imagen');
    }
}
