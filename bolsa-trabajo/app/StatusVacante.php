<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusVacante extends Model
{
    //
    protected $fillable = ['nombre'];

    public function vacantes()
    {
        return $this->hasOne(Vacante::class);
    }
}
