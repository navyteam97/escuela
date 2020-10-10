<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horarios';
    protected $fillable = [
        'ingreso',
        'egreso',
        'status',
        'turno_id',
        'cajaCurricular_id',
    ];

    public function cajaCurricular()
    {
        return $this->belongsTo('App\CajaCurricular');
    }

    public function turno()
    {
        return $this->belongsTo('App\Turno');
    }
}
