<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documentos';
    protected $fillable = [
        'descripcion',
        'status',
        'tipoDeDocumento_id',
    ];

    public function personas()
    {
        return $this->hasMany('App\Persona');
    }



    public function tipoDeDocumento()
    {
        return $this->hasMany('App\TipoDeDocumento');
    }
}
