<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
	protected $table='alumnos';
    protected $fillable = ['nombre','apellido','telefono','direccion','acudiente','identificacion','fecha_nacimiento','edad','genero','eps'];

    public $timestamps=false;
}
