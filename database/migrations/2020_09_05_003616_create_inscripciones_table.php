<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionesTable extends Migration
{
    public function up()
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->boolean('status')->default(true);
            $table->foreignId('cajaCurricular_id')->nullable()->constrained('cajas_curriculares');
            $table->foreignId('tipoDeInscripcion_id')->constrained('tipos_de_inscripciones');
            $table->foreignId('alumno_id')->constrained('alumnos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inscripciones');
    }
}
