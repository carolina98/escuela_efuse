<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablHorarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

     Schema::create('horarios', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('horario');
                       
         });
        }
    public function down()
    {
     //   Schema::drop('password_resets');
    }

    
 }

   

