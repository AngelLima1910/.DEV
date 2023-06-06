<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTConstanciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_constancias', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_alumnos');
            $table->unsignedInteger('id_periodos');
            $table->string('estudiante');
            $table->string('control');
            $table->string('actividad');
            $table->string('periodo');
            $table->date('fecha');
            $table->string('grupo');
            $table->string('hrsAcreditadas');
            $table->timestamps();
            $table->foreign('id_alumnos')->references('id')->on('t_alumnos');
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
        Schema::dropIfExists('t_constancias');
    }
}
