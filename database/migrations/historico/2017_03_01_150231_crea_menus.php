<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaMenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_menu', 50)->unique();
            $table->string('ruta_menu', 255);
            $table->integer('menu_padre');
			$table->integer('nivel_menu');
            $table->string('estilo_menu',255);
			$table->boolean('estatus_menu')->default(true);
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
        Schema::dropIfExists('menu');
    }
}
