<?php

namespace App\Models\Cubo;

use Illuminate\Database\Eloquent\Model;

class CuboUser extends Model
{
    protected $connection = 'cubo';
    protected $table = 'usuarios';
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
}
