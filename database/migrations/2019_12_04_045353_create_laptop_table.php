<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaptopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('No');
            $table->unsignedBigInteger('fk_marca');
            $table->string('modelo_laptop',50)->default('N/A');
            $table->unsignedBigInteger('fk_procesador');
            $table->string('modelo_procesador',50)->default('N/A');
            $table->string('velocidad_procesador',5)->default('N/A');
            $table->unsignedBigInteger('fk_ram');
            $table->unsignedBigInteger('fk_hd');
            $table->enum('ranking', ['Bueno','Regular','Excelente']);
            $table->string('notas', 1000)->default('N/A');
            $table->enum('estado', ['Activo', 'Repuestos','Eliminado'])->default('Activo');

            $table->foreign('fk_marca')->references('id')->on('marca');
            $table->foreign('fk_procesador')->references('id')->on('procesador');
            $table->foreign('fk_ram')->references('id')->on('ram');
            $table->foreign('fk_hd')->references('id')->on('hd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laptop');
    }
}
