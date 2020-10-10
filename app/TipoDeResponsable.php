<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDeResponsable extends Model
{
    protected $table = 'tipos_de_responsables';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function responsables()
    {
        return $this->hasMany('App\Responsable');
    }
}
