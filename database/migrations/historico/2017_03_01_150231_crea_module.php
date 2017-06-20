<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaModule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //
        Schema::create('module', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_modulo', 100)->unique();
            $table->string('descripcion_modulo', 255);
            $table->integer('modulo_padre');
            $table->boolean('estatus_modulo')->default(true);
			$table->timestamps();
			$table->softDeletes();            
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
        Schema::dropIfExists('module');
    }
}
