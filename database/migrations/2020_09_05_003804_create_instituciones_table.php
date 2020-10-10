<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitucionesTable extends Migration
{
    public function up()
    {
        Schema::create('instituciones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->id();
            $table->string('descripcion')->unique();
            $table->boolean('status')->default(true);
            $table->foreignId('contacto_id')->constrained('contactos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('instituciones');
    }
}
