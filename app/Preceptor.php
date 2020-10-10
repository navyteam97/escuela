<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preceptor extends Model
{
    protected $table = 'preceptores';
    protected $fillable = [
        'status',
        'user_id',
    ];

    public function preceptoresCursos()
    {
        return $this->hasMany('App\PreceptorCurso');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
