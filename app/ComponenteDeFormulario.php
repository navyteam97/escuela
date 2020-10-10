<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComponenteDeFormulario extends Model
{
    protected $table = 'componentes_de_formularios';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function formulario()
    {
        return $this->belongsTo('App\Formulario');
    }

    public function responsable()
    {
        return $this->belongsTo('App\Responsable');
    }
}
