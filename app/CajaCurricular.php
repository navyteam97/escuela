<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CajaCurricular extends Model
{
    protected $table = 'cajas_curriculares';
    protected $fillable = [
        'status',
        'carrera_id',
        'curso_id',
        'materia_id',
        'coorte_id',
    ];

    public function cajasCurricularesProfesores()
    {
        return $this->hasMany('App\CajaCurricularProfesor');
    }

    public function horarios()
    {
        return $this->hasMany('App\Horario');
    }

    public function imagenes()
    {
        return $this->hasMany('App\Imagen');
    }

    public function inscripciones()
    {
        return $this->hasMany('App\Inscripcion');
    }



    public function carrera()
    {
        return $this->belongsTo('App\Carrera');
    }

    public function coorte()
    {
        return $this->belongsTo('App\Coorte');
    }

    public function curso()
    {
        return $this->belongsTo('App\Curso');
    }

    public function materia()
    {
        return $this->belongsTo('App\Materia');
    }
}
