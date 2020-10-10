<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsablesTable extends Migration
{
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->boolean('status')->default(true);
            $table->foreignId('persona_id')->constrained('personas');
            $table->foreignId('componenteDeFormulario_id')->constrained('componentes_de_formularios');
            $table->foreignId('tipoDeResponsable_id')->constrained('tipos_de_responsables');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('responsables');
    }
}
