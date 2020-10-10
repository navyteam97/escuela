<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCajasCurricularesTable extends Migration
{
    public function up()
    {
        Schema::create('cajas_curriculares', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->boolean('status')->default(true);
            $table->foreignId('carrera_id')->constrained('carreras');
            $table->foreignId('curso_id')->constrained('cursos');
            $table->foreignId('materia_id')->constrained('materias');
            $table->foreignId('coorte_id')->constrained('coortes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cajas_curriculares');
    }
}
