<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Aprendiz extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'aprendices';

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'direccion',
        'genero',
        'ficha',
        'jornada',
        'tipo_documento',
        'numero_documento',
    ];
}