<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $table = 'responsables';
    protected $fillable = [
        'status',
        'persona_id',
        'componenteDeFormulario_id',
        'tipoDeResponsable_id',
    ];

    public function componenteDeFormulario()
    {
        return $this->belongsTo('App\ComponenteDeFormulario');
    }

    public function persona()
    {
        return $this->belongsTo('App\Persona');
    }

    public function tipoDeResponsable()
    {
        return $this->belongsTo('App\TipoDeResponsable');
    }
}
