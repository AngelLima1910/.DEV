<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_carrera');
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->integer('control');
            $table->bigInteger('celular');
            $table->string('carrera');
            $table->date('fecha_nac');
            $table->string('procedencia');
            $table->date('fecha_ingreso');
            $table->timestamps();

            $table->foreign('id_carrera')->references('id')->on('t_cat_carreras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_alumnos');
    }
}
