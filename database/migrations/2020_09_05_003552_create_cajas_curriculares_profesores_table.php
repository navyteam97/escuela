<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCajasCurricularesProfesoresTable extends Migration
{
    public function up()
    {
        Schema::create('cajas_curriculares_profesores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->boolean('status')->default(true);
            $table->foreignId('profesor_id')->constrained('profesores');
            $table->foreignId('cajaCurricular_id')->constrained('cajas_curriculares');
            $table->foreignId('condicion_id')->constrained('condiciones');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cajas_curriculares_profesores');
    }
}
