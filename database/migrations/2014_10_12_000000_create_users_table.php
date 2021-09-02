<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->string('idUsuario');
            $table->string('password');
            $table->string('nombre')->nullable();
            $table->string('apellidos')->nullable();
            $table->unsignedTinyInteger('rol');
            $table->string('hash')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->primary('idUsuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
