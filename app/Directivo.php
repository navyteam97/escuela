<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directivo extends Model
{
    protected $table = 'directivos';
    protected $fillable = [
        'status',
        'user_id',
    ];

    public function carrerasInstituciones()
    {
        return $this->hasMany('App\CarreraInstitucion');
    }



    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
