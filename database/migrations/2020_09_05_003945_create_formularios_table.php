<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->id();
            $table->boolean('respuestaBinaria')->nullable();
            $table->string('respuestaTextual')->nullable();
            $table->bigInteger('respuestaNumerica')->nullable();
            $table->decimal('respuestaDecimal', 8, 2)->nullable();
            $table->boolean('status')->nullable();
            $table->foreignId('componenteDeFormulario_id')->constrained('componentes_de_formularios');
            $table->foreignId('entrada_id')->constrained('entradas');
            $table->foreignId('alumno_id')->constrained('alumnos');
            $table->foreignId('ficha_id')->constrained('fichas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('formularios');
    }
}
