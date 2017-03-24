<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablAdministrador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
   
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
      //  public function down()

       // Schema::drop('password_resets');
    
}

   