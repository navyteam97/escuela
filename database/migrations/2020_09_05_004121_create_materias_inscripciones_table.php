<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasInscripcionesTable extends Migration
{
    public function up()
    {
        Schema::create('materias_inscripciones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->boolean('status')->default(true);
            $table->foreignId('materia_id')->constrained('materias');
            $table->foreignId('inscripcion_id')->constrained('inscripciones');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('materias_inscripciones');
    }
}
