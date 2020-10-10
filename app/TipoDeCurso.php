<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDeCurso extends Model
{
    protected $table = 'tipos_de_cursos';
    protected $fillable = [
        'descripcion',
        'status',
    ];

    public function cursos()
    {
        return $this->hasMany('App\Curso');
    }
}
