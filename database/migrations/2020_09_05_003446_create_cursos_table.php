<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->boolean('status')->default(true);
            $table->foreignId('division_id')->nullable()->constrained('divisiones');
            $table->foreignId('tipoDeCurso_id')->constrained('tipos_de_cursos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
