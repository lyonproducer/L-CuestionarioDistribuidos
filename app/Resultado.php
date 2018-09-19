<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Resultado extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'resultados';

    protected $fillable = [
        'cedula', 
        'tipo','total',
    ];
    
}
