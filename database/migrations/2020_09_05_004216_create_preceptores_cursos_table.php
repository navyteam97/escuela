<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreceptoresCursosTable extends Migration
{
    public function up()
    {
        Schema::create('preceptores_cursos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->boolean('status')->default(true);
            $table->foreignId('preceptor_id')->constrained('preceptores');
            $table->foreignId('curso_id')->constrained('cursos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('preceptores_cursos');
    }
}
