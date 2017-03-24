<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablEntrenador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
  
     Schema::create('entrenador', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('direccion');
            
             });
        }
      //  public function down()
    
       // Schema::drop('password_resets');
    }
   

    
