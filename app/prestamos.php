<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestamos extends Model
{
	protected $table='prestamos';

     protected $fillable = ['nombre','Cantidad','fecha_prestamo','fecha_entrega','nombre_entrenador','identificacion'];

    public $timestamps=false;
}
