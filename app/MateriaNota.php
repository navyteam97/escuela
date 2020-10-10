<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriaNota extends Model
{
    protected $table = 'materias_notas';
    protected $fillable = [
        'status',
        'alumno_id',
        'materia_id',
        'nota_id',
    ];

    public function alumno()
    {
        return $this->belongsTo('App\Alumno');
    }

    public function materia()
    {
        return $this->belongsTo('App\Materia');
    }

    public function nota()
    {
        return $this->belongsTo('App\Nota');
    }
}
