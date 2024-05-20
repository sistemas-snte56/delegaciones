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
        Schema::create('delegaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_region');
            $table->unsignedBigInteger('id_tipo_delegacion');
            $table->unsignedBigInteger('id_delegacion_o_ct');
            $table->unsignedBigInteger('id_nomenclatura');
            $table->string('num_delegaciona', 150);
            $table->string('nivel_delegaciona', 150);
            $table->string('sede_delegaciona', 150);
            $table->date('fecha_inicio_delegaciona', 150);
            $table->date('fecha_final_delegaciona', 150);
            $table->string('direccion_delegaciona',250);
            $table->string('cp_delegaciona', 150);
            $table->string('ciudad_delegaciona', 150);
            $table->string('estado_delegaciona', 150);
            
            $table->foreign('id_region')->references('id')->on('regiones');
            $table->foreign('id_tipo_delegacion')->references('id')->on('tipo_delegacion');
            $table->foreign('id_delegacion_o_ct')->references('id')->on('delegacion_o_ct');
            $table->foreign('id_nomenclatura')->references('id')->on('nomenclatura');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delegaciones');
    }
};
