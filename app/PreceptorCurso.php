<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreceptorCurso extends Model
{
    protected $table = 'preceptores_cursos';
    protected $fillable = [
        'status',
        'preceptor_id',
        'curso_id',
    ];

    public function curso()
    {
        return $this->belongsTo('App\Curso');
    }

    public function preceptor()
    {
        return $this->belongsTo('App\Preceptor');
    }
}
