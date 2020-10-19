<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    //
    protected $fillable = [
        'titulo', 'descripcion', 'categoria_id',
        'salario', 'status_id', 'fecha_inicio',
        'fecha_fin', 'comentarios'
    ];
}
