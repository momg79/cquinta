<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJugadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('jugadores', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('nombre');
            $table->string('apellido_materno');
            $table->string('apellido_paterno');
            $table->date('fecha_nacimiento');
            $table->date('apellido_paterno');
            $table->integer('categoria');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->string('correo');
            $table->string('direccion');
            $table->string('telefonoapoderado');
            $table->integer('estado_alumno');            
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
        Schema::dropIfExists('jugadoras');
    }
}
