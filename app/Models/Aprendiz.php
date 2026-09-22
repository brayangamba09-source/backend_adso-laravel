<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    protected $connection = 'mysql';
    protected $table = 'aprendices';

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