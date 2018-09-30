<?php

namespace App\Models\Cubo;

use Illuminate\Database\Eloquent\Model;

class CuboPensamiento extends Model
{
    protected $connection = 'cubo';
    protected $table = 'Pensamiento';

    protected $fillable = [
        'total',
        'tipo',
        'id_usuario'
    ];
}
