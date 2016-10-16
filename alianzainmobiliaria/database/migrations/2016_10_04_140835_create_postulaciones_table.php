<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulaciones', function (Blueprint $table) {
            //$table->increments('id');
            $table->integer('operacion_id')->unsigned();
            $table->foreign('operacion_id')
                ->references('id')
                ->on('operaciones')
                ->onDelete('cascade');
            $table->integer('inmueble_id')->unsigned();
            $table->foreign('inmueble_id')
                ->references('id')
                ->on('inmuebles')
                ->onDelete('cascade');
            $table->primary(array('operacion_id', 'inmueble_id'));
            $table->unique(array('operacion_id', 'inmueble_id'));
            $table->date('fecha_inicio');
            $table->date('fecha_fin')->nullable();
            $table->float('precio');
            $table->enum('estado_pustulacion',['activo','inactivo'])->default('activo');
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
        Schema::dropIfExists('postulaciones');
    }
}
