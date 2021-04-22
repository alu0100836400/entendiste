<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->string('idAsignatura');
            $table->string('idProfesorAlta');
            $table->string('nombreAsignatura');
            $table->string('password');
            $table->timestamps();

            $table->primary('idAsignatura');
            $table->foreign('idProfesorAlta')->references('idUsuario')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignaturas');
    }
}
