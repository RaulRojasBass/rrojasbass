<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados_detalle_traducciones', function (Blueprint $table) {
            $table->id();
            $table->text('desc');
            $table->text('desc');
            $table->text('p_tiempos');
            $table->string('idioma');
            $table->string('c_empleado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados_detalle_traducciones');
    }
};
