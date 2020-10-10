<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $fillable = [
        'status',
        'division_id',
        'tipoDeCurso_id',
    ];

    public function cajasCurriculares()
    {
        return $this->hasMany('App\CajaCurricular');
    }

    public function preceptoresCursos()
    {
        return $this->hasMany('App\PreceptorCurso');
    }



    public function division()
    {
        return $this->belongsTo('App\Division');
    }

    public function tipoDeCurso()
    {
        return $this->belongsTo('App\TipoDeCurso');
    }
}
