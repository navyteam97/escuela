<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrelativasTable extends Migration
{
    public function up()
    {
        Schema::create('correlativas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->boolean('status')->default(true);
            $table->foreignId('tipoDeCorrelativa_id')->constrained('tipos_de_correlativas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('correlativas');
    }
}
