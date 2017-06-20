<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //
        Schema::create('transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_transaccion', 100)->unique();
            $table->string('descripcion_transcripcion', 255);           
            $table->boolean('estatus_transaccion')->default(true);
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
