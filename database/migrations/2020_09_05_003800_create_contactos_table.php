<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosTable extends Migration
{
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->id();
            $table->string('telefono')->unique();
            $table->string('correo')->nullable();
            $table->boolean('status')->default(true);
            $table->foreignId('direccion_id')->constrained('direcciones');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contactos');
    }
}
