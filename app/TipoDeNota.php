<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDeNota extends Model
{
    protected $table = 'tipos_de_notas';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function notas()
    {
        return $this->hasMany('App\Nota');
    }
}
