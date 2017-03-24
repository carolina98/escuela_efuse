<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administrador extends Model
{
	protected $table='administrador';

     protected $fillable = ['nombre','apellido','identificacion','telefono','direccion'];

    public $timestamps=false;
}
