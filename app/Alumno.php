<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
    protected $fillable = [
        'status',
        'user_id',
        'condicion_id',
    ];

    public function inscripciones()
    {
        return $this->hasMany('App\Inscripcion');
    }

    public function librosMatrices()
    {
        return $this->hasMany('App\LibroMatriz');
    }
    
    public function materiasNotas()
    {
        return $this->hasMany('App\MateriaNota');
    }

    public function formularios()
    {
        return $this->hasMany('App\Formulario');
    }



    public function condicion()
    {
        return $this->belongsTo('App\Condicion');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
