<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaAuditory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //
        Schema::create('auditory', function (Blueprint $table) {
            $table->increments('id');
            $table->string('accion', 20);
            $table->string('modelo', 50);
            $table->integer('id_modelo');
            $table->text('valor_anterior');
            $table->text('valor_nuevo');
            $table->string('ip', 20);
            $table->string('nombre_maquina', 20);            
            $table->timestamps();
            
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
        Schema::dropIfExists('auditory');
    }
}
