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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('c_empleado');
            $table->string('nombre');
            $table->string('a_pat');
            $table->string('a_mat');
            $table->integer('edad');
            $table->date('f_nacimiento');
            $table->string('genero');
            $table->decimal('s_base',10,2);
            $table->decimal('s_base_usa',10,2);
            $table->dateTime('usa_cal');
            $table->string('estatus');
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
        Schema::dropIfExists('empleados');
    }
};
