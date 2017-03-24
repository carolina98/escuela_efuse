<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entrenador extends Model
{
	protected $table='entrenador';

     protected $fillable = ['nombre','apellido','identificacion','telefono','direccion'];

    public $timestamps=false;
}
