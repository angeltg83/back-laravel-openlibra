<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascota', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->string('raza', 130);
            $table->double('peso', 8, 2);
            $table->double('talla', 8, 2);
            $table->unsignedBigInteger('id_dueno');
            $table->foreign('id_dueno')->references('id')->on('persona');
            $table->boolean('estado_registro')->default(true);
            
            $table->timestamp('fecha_creacion')->useCurrent();
            $table->timestamp('fecha_modificacion')->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascota');
    }
}
