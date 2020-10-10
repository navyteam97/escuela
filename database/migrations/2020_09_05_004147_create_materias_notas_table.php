<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasNotasTable extends Migration
{
    public function up()
    {
        Schema::create('materias_notas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->boolean('status')->default(true);
            $table->foreignId('alumno_id')->constrained('alumnos');
            $table->foreignId('materia_id')->constrained('materias');
            $table->foreignId('nota_id')->constrained('notas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('materias_notas');
    }
}
