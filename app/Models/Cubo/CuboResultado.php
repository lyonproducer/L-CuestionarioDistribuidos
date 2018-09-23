<?php

namespace App\Models\Cubo;

use Illuminate\Database\Eloquent\Model;

class CuboResultado extends Model
{
    protected $connection = 'cubo';
    protected $table = 'resultados';

    protected $fillable = [
        'cedula', 
        'tipo','total',
    ];
}
