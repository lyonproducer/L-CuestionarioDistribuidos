<?php

namespace App\Models\Instinto;

use Illuminate\Database\Eloquent\Model;

class ResultadosInstinto extends Model
{
    protected $connection = 'sqlsrv';
    protected $table = 'resultados';

    protected $fillable = [
        'cedula', 
        'total',
        'tipo',
    ];
}
