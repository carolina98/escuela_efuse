<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablInventario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
  
     Schema::create('inventario', function (Blueprint $table) {
        
            $table->increments('id');
            $table->string('codigo');
            $table->string('nombre_implemento');
            $table->string('cantidad_implementos');
            $table->string('precio_implemento');
            
         });
        }
      // public function down()
    
       // Schema::drop('password_resets');
    //}

      }

   


