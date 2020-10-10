<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosMatricesTable extends Migration
{
    public function up()
    {
        Schema::create('libros_matrices', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->id();
            $table->string('numeroDeArchivo')->unique();
            $table->year('cicloLectivo')->nullable();
            $table->boolean('status')->default(true);
            $table->foreignId('alumno_id')->constrained('alumnos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('libros_matrices');
    }
}
