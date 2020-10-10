<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{ 
    use Notifiable;
    use HasRoles;

    protected $fillable = [
        'name', 'email', 'password', 'status',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function alumnos()
    {
        return $this->hasMany('App\Alumno');
    }

    public function directivos()
    {
        return $this->hasMany('App\Directivo');
    }

    public function personas()
    {
        return $this->hasMany('App\Persona');
    }

    public function preceptores()
    {
        return $this->hasMany('App\Preceptor');
    }

    public function profesores()
    {
        return $this->hasMany('App\Profesor');
    }
}
