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
            $table->id();
            $table->string('credito');
            $table->string('mooc');
            $table->string('evidencia');
            $table->string('estudiante');
            $table->string('estatus');
            $table->string('carpeta');
            $table->date('fecha_registro');
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
        Schema::dropIfExists('t_creditos');
    }
}
