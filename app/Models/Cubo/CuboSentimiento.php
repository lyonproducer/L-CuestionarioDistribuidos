<?php

namespace App\Models\Cubo;

use Illuminate\Database\Eloquent\Model;

class CuboSentimiento extends Model
{
    protected $connection = 'cubo';
    protected $table = 'sentimiento';

    protected $fillable = [
        'total',
        'tipo',
        'id_usuario'
    ];
}
