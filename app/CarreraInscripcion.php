<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarreraInscripcion extends Model
{
    protected $table = 'carreras_inscripciones';
    protected $fillable = [
        'status',
        'carrera_id',
        'inscripcion_id',
    ];

    public function carrera()
    {
        return $this->belongsTo('App\Carrera');
    }

    public function inscripcion()
    {
        return $this->belongsTo('App\Inscripcion');
    }
}
