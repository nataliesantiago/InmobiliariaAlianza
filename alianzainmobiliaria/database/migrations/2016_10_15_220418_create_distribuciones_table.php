<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistribucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribuciones', function (Blueprint $table) {
           // $table->increments('id');
            $table->integer('inmueble_id')->unsigned();
            $table->foreign('inmueble_id')
                ->references('id')
                ->on('inmuebles')
                ->onDelete('cascade');
            $table->integer('detalle_id')->unsigned();
            $table->foreign('detalle_id')
                ->references('id')
                ->on('detalles')
                ->onDelete('cascade');
            $table->integer('cantidad');
             $table->primary(array('inmueble_id', 'detalle_id'));
            $table->unique(array('inmueble_id', 'detalle_id'));
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
        Schema::dropIfExists('distribuciones');
    }
}
