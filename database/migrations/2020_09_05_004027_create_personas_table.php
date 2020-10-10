<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->string('apellido');
            $table->string('nombre');
            $table->date('nacimiento');
            $table->boolean('status')->default(true);
            $table->foreignId('genero_id')->constrained('generos');
            $table->foreignId('contacto_id')->constrained('contactos');
            $table->foreignId('documento_id')->constrained('documentos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
