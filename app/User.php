<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent 
{
    use Notifiable;

    protected $connection = 'mongodb';
    protected $collection = 'usuarios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 
        'cedula', 
        'pais',
        'profesion',
        'sexo',
        'edad',
        'fechaNacimiento',
        'estadoCivil',
        'tieneTrabajo',
        'vivePadres',
        'tieneHermanos',
        'hermanos'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
