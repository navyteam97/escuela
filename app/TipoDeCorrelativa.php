<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDeCorrelativa extends Model
{
    protected $table = 'tipos_de_correlativas';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function correlativas()
    {
        return $this->hasMany('App\Correlativa');
    }
}
