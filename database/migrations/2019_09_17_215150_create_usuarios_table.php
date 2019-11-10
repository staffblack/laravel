<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('login')->nullable();
            $table->string('password')->nullable();
            $table->text('nombres')->nullable();
            $table->text('apellidos')->nullable();
            $table->string('perfil');
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}
