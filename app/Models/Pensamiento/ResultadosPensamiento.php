<?php

namespace App\Models\Pensamiento;

use Illuminate\Database\Eloquent\Model;

class ResultadosPensamiento extends Model
{
    protected $connection = 'mysql';
    protected $table = 'resultados';

    protected $fillable = [
        'cedula', 
        'total',
        'tipo',
    ];
}
