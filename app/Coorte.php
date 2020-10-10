<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coorte extends Model
{
    protected $table = 'coortes';
    protected $fillable = [
        'year',
        'status',
    ];

    public function cajasCurriculares()
    {
        return $this->hasMany('App\CajaCurricular');
    }
}
