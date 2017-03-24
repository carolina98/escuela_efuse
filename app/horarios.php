<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horarios extends Model
{
   
	protected $table='horarios';

     protected $fillable = ['categoria','hora_llegada','hora_salida'];

    public $timestamps=false;
}
