<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDotacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotaciones', function (Blueprint $table) {
           // $table->increments('id');
            $table->integer('inmueble_id')->unsigned();
            $table->foreign('inmueble_id')
                ->references('id')
                ->on('inmuebles')
                ->onDelete('cascade');
            $table->integer('servicio_id')->unsigned();
            $table->foreign('servicio_id')
                ->references('id')
                ->on('servicios')
                ->onDelete('cascade');
            $table->primary(array('inmueble_id', 'servicio_id'));
            $table->unique(array('inmueble_id', 'servicio_id'));
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
        Schema::dropIfExists('dotaciones');
    }
}
