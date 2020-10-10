<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesores';
    protected $fillable = [
        'status',
        'user_id',
    ];

    public function cajasCurricularesProfesores()
    {
        return $this->hasMany('App\CajaCurricularProfesor');
    }



    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
