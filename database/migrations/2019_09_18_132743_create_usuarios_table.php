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
            $table->string('cedula')->nullable();
            $table->text('grado')->nullable();
            $table->text('nombres')->nullable();
            $table->text('apellidos')->nullable();
            $table->string('email')->nullable();
            $table->text('telefono')->nullable();
            $table->text('cargo')->nullable();
            $table->text('area')->nullable();
            $table->string('password')->nullable();
            $table->date('foto')->nullable();
            $table->text('grado')->nullable();
            $table->foreign('cedula')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
