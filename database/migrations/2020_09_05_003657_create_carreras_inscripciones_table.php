<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrerasInscripcionesTable extends Migration
{
    public function up()
    {
        Schema::create('carreras_inscripciones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->boolean('status')->default(true);
            $table->foreignId('carrera_id')->constrained('carreras');
            $table->foreignId('inscripcion_id')->constrained('inscripciones');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carreras_inscripciones');
    }
}
