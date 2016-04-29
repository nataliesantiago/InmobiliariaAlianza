<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolls', function (Blueprint $table) {
            $table->string('description')->nullable();
            $table->integer('user')->unsigned();
            $table->integer('area')->unsigned();
            $table->timestamps();
            $table->foreign('user')->references('id')->on('users');
            $table->foreign('area')->references('id')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('enrolls');
    }
}
