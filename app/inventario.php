<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventario extends Model

{
   
	protected $table='inventario';

     protected $fillable = ['nombre','cantidad'];

    public $timestamps=false;   //
}
