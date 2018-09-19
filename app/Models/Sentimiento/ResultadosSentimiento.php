<?php

namespace App\Models\Sentimiento;

use Illuminate\Database\Eloquent\Model;

class ResultadosSentimiento extends Model
{
    protected $connection = 'pgsql';
    protected $table = 'resultados';

    protected $fillable = [
        'cedula', 
        'total',
        'tipo',
    ];
}
