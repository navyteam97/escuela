<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriaInscripcion extends Model
{
    protected $table = 'materias_inscripciones';
    protected $fillable = [
        'status',
        'materia_id',
        'inscripcion_id',
    ];

    public function inscripcion()
    {
        return $this->belongsTo('App\Inscripcion');
    }

    public function materia()
    {
        return $this->belongsTo('App\Materia');
    }
}
