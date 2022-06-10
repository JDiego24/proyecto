<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table){
            $table->id();
            $table->string('Nombre');
            $table->string('Apellido_M');
            $table->string('Apellido_P');
            $table->date('Fecha_Nacimiento');
            $table->integer('Telefono');
            $table->string('Matricula');
            $table->string('Correo electronico');
            $table->string('Curp');
            $table->integer('NSS');
            $table->integer('Edad');
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
        //
    }
}
