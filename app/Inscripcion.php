<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripciones';
    protected $fillable = [
        'status',
        'cajaCurricular_id',
        'tipoDeInscripcion_id',
        'alumno_id',
    ];

    public function carrerasInscripciones()
    {
        return $this->hasMany('App\CarreraInscripcion');
    }

    public function materiasInscripciones()
    {
        return $this->hasMany('App\MateriaInscripcion');
    }



    public function alumno()
    {
        return $this->hasMany('App\Alumno');
    }

    public function cajaCurricular()
    {
        return $this->hasMany('App\CajaCurricular');
    }

    public function tipoDeInscripcion()
    {
        return $this->hasMany('AppTipoDeInscripcion');
    }
}
