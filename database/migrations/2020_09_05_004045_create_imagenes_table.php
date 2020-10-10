<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenesTable extends Migration
{
    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->id();
            $table->string('descripcion')->unique();
            $table->boolean('status')->default(true);
            $table->foreignId('persona_id')->nullable()->constrained('personas');
            $table->foreignId('carrera_id')->nullable()->constrained('carreras');
            $table->foreignId('cajaCurricular_id')->nullable()->constrained('cajas_curriculares');
            $table->foreignId('tipoDeImagen_id')->constrained('tipos_de_imagenes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('imagenes');
    }
}
