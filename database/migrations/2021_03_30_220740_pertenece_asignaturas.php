<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PerteneceAsignaturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perteneceAsignaturas', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->string('idAsignatura');
            $table->string('idUsuario');
            $table->timestamps();

            $table->primary(['idAsignatura', 'idUsuario']);
            $table->foreign('idAsignatura')->references('idAsignatura')->on('asignaturas');
            $table->foreign('idUsuario')->references('idUsuario')->on('users');
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
    }
}
