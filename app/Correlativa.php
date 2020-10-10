<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correlativa extends Model
{
    protected $table = 'correlativas';
    protected $fillable = [
        'status',
        'tipoDeCorrelativa_id',
        'materia_id',
        'materiaCorrelativa_id',
    ];

    public function tipoDeCorrelativa()
    {
        return $this->belongsTo('App\TipoDeCorrelativa');
    }

    public function materia()
    {
        return $this->belongsTo('App\Materia');
    }

    public function materiaCorrelativa()
    {
        return $this->belongsTo('App\Materia');
    }
}
