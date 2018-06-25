<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelplans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            //$table->dateTime('created_at');
            $table->date('fecha_de_salida');
            $table->date('fecha_de_regreso');
            $table->integer('presupuesto');
            $table->string('destino');
            $table->text('detalle');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travelplans');
    }
}
