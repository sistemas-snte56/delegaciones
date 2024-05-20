<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('maestros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_delegacion');
            $table->unsignedBigInteger('id_secretaria');
            $table->string('titulo' , 150);
            $table->string('nombre' , 150);
            $table->string('apaterno' , 150);
            $table->string('amaterno' , 150);
            $table->unsignedBigInteger('id_genero');
            $table->string('email' ,150);
            $table->string('telefono' , 20);
            $table->string('direccion' ,250);
            $table->string('cp' , 50);
            $table->string('ciudad' , 50)->unique();
            $table->string('maestro' , 50)->unique();
            $table->unsignedBigInteger('id_users')->nullable()->default(null);

            $table->timestamps();



            $table->foreign('id_delegacion')->references('id')->on('delegaciones');
            $table->foreign('id_secretaria')->references('id')->on('secretarias');
            $table->foreign('id_genero')->references('id')->on('genero');
            $table->foreign('id_users')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maestros');
    }
};
