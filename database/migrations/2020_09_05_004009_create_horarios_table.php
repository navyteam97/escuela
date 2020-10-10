<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->time('ingreso');
            $table->time('egreso');
            $table->boolean('status')->default(true);
            $table->foreignId('turno_id')->nullable()->constrained('turnos');
            $table->foreignId('cajaCurricular_id')->nullable()->constrained('cajas_curriculares');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('horarios');
    }
}
