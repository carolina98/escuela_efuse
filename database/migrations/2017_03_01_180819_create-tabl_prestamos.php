<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablPrestamos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    
    Schema::create('prestamos', function (Blueprint $table) {
        
            $table->increments('id');
            $table->string('codigo');
            $table->string('numero_implemento');
            $table->string('fecha-prestamo');
            $table->string('fecha_entrega');
          
           });
        }
    //   public function down()
     //{
     //    Schema::drop('password_resets');
  //  }
 //
}
    



   