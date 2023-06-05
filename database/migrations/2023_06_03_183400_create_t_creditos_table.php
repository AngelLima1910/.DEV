<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_creditos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_alumnos');
            $table->unsignedInteger('id_creditos');
            $table->unsignedInteger('id_periodos');
            $table->string('credito');
            $table->string('mooc');
            $table->string('evidencia');
            $table->string('estudiante');
            $table->string('periodo');
            $table->string('estatus');
            $table->string('carpeta');
            $table->date('fecha_registro');
            $table->timestamps();
            $table->foreign('id_alumnos')->references('id')->on('t_alumnos');
            $table->foreign('id_creditos')->references('id')->on('t_cat_creditos');
            $table->foreign('id_periodos')->references('id')->on('t_cat_periodos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_creditos');
    }
}
