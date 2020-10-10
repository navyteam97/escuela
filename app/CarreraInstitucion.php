<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarreraInstitucion extends Model
{
    protected $table = 'carreras_instituciones';
    protected $fillable = [
        'status',
        'carrera_id',
        'institucion_id',
        'directivo_id',
    ];

    public function carrera()
    {
        return $this->belongsTo('App\Carrera');
    }

    public function directivo()
    {
        return $this->belongsTo('App\Directivo');
    }

    public function institucion()
    {
        return $this->belongsTo('App\Institucion');
    }
}
