<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
    protected $table = 'condiciones';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function alumno()
    {
        return $this->belongsTo('App\Alumno');
    }

    public function cajaCurricularProfesor()
    {
        return $this->belongsTo('App\CajaCurricularProfesor');
    }
}
