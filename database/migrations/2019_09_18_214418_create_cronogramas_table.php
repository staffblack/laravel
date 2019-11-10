<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCronogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cronogramas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id')->nullable();
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            $table->string('tipo');
            $table->text('nombre')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('responsable')->nullable();
            $table->string('foto')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cronogramas');
    }
}
