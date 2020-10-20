<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $fillable = ['nombre'];

    //---Definición de relación vacantes-categorías
    public function vacantes()
    {
        return $this->hasMany(Vacante::class);
    }
}
