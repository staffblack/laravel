<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocentePerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente_perfils', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('cedula')->nullable();
            $table->string('grado')->nullable();
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('email')->nullable();
            $table->integer('telefono')->nullable();
            $table->text('cargo')->nullable();
            $table->text('area')->nullable();
            $table->string('password')->nullable();
            $table->string('foto')->nullable();
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
        Schema::drop('docente_perfils');
    }
}
