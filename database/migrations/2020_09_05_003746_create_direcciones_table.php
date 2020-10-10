<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesTable extends Migration
{
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->id();
            $table->string('chacra')->nullable();
            $table->string('sector')->nullable();
            $table->string('altura')->nullable();
            $table->string('casa')->nullable();
            $table->string('departamento')->nullable();
            $table->string('piso')->nullable();
            $table->string('descripcion')->nullable();
            $table->boolean('status')->default(true);
            $table->foreignId('barrio_id')->nullable()->constrained('barrios');
            $table->foreignId('cuadra_id')->nullable()->constrained('cuadras');
            $table->foreignId('calle_id')->nullable()->constrained('calles');
            $table->foreignId('municipio_id')->nullable()->constrained('municipios');
            $table->foreignId('tipoDeDireccion_id')->constrained('tipos_de_direcciones');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('direcciones');
    }
}
