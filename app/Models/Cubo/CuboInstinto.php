<?php

namespace App\Models\Cubo;

use Illuminate\Database\Eloquent\Model;

class CuboInstinto extends Model
{
    protected $connection = 'cubo';
    protected $table = 'instinto';

    protected $fillable = [
        'total',
        'tipo',
        'id_usuario'
    ];
}
