<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('curp');
            $table->string('telefono');
            $table->string('genero');
            $table->string('grado');
            $table->integer('paisGrado');
            $table->integer('institucionGrado');
            $table->string('departamento');
            $table->string('nombramiento');
            $table->string('sni');
            $table->string('prodep');
            $table->string('nombreProdep');
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
        Schema::drop('personales');
    }
}
