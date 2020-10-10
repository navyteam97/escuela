<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDeInscripcion extends Model
{
    protected $table = 'tipos_de_inscripciones';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function inscripciones()
    {
        return $this->hasMany('App\Inscripcion');
    }
}
