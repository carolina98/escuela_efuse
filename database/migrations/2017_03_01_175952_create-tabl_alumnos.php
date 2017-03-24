<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('alumnos', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('acudiente');
            
            });
        }

      
    /**  
     * Reverse the migrations.
     *
     * @return void
     */
         public function down()
    {
            Schema::drop('users');
    }

    
}