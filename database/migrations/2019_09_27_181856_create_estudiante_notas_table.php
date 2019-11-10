<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstudianteNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante_notas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id')->nullable();
            $table->integer('id_nivel')->nullable();
            $table->integer('id_materia')->nullable();
            $table->integer('cedula_docente')->nullable();
            $table->integer('cedula_estudiante')->nullable();
            $table->integer('id_bloque')->nullable();
            $table->text('nota')->nullable();
            $table->text('alcance')->nullable();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estudiante_notas');
    }
}
