<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrerasInstitucionesTable extends Migration
{
    public function up()
    {
        Schema::create('carreras_instituciones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->boolean('status')->default(true);
            $table->foreignId('carrera_id')->constrained('carreras');
            $table->foreignId('institucion_id')->constrained('instituciones');
            $table->foreignId('directivo_id')->constrained('directivos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carreras_instituciones');
    }
}
