<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materias';
    protected $fillable = [
        'descripcion',
        'subdescripcion',
        'status',
    ];

    public function cajasCurriculares()
    {
        return $this->hasMany('App\CajaCurricular');
    }

    public function correlativas()
    {
        return $this->hasMany('App\Correlativa');
    }

    public function materiasInscripciones()
    {
        return $this->hasMany('App\MateriaInscripcion');
    }

    public function materiasNotas()
    {
        return $this->hasMany('App\MateriaNota');
    }
}