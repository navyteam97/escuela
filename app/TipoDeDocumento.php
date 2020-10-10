<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDeDocumento extends Model
{
    protected $table = 'tipos_de_documentos';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function documentos()
    {
        return $this->hasMany('App\Documento');
    }
}
