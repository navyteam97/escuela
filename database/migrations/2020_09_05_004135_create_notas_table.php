<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->decimal('numerica', 8, 2);
            $table->foreignId('calificacion_id')->nullable()->constrained('calificaciones');
            $table->foreignId('tipoDeNota_id')->constrained('tipos_de_notas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
