<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->id('idPregunta');  //lo pone como primary
            $table->string('idAsignatura');
            $table->string('idProfesor');
            $table->text('pregunta');
            $table->timestamps();

            $table->foreign('idAsignatura')->references('idAsignatura')->on('asignaturas');
            $table->foreign('idProfesor')->references('idUsuario')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
}
