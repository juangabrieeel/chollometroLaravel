<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChollosTable extends Migration
{
    public function up()
    {
        Schema::create('chollos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('url');
            $table->string('categoria');
            $table->integer('puntuacion');
            $table->decimal('precio', 10, 2);
            $table->decimal('precio_descuento', 10, 2);
            $table->boolean('disponible');
            $table->timestamps();
            $table->string('imagen')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chollos');
    }
}
