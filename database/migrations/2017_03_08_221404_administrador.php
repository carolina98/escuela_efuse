<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Administrador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrador', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('nombre');
             $table->string('apellido');
            $table->string('identificacion');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('clave_usuario');
            
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
