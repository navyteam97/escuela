<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'notas';
    protected $fillable = [
        'numerica',
        'calificacion_id',
        'tipoDeNota_id',
    ];

    public function materiasNotas()
    {
        return $this->hasMany('App\MateriaNota');
    }



    public function tipoDeNota()
    {
        return $this->belongsTo('App\TipoDeNota');
    }

    public function calificacion()
    {
        return $this->belongsTo('App\Calificacion');
    }
}
