<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',120);
            $table->date('date_publication');
            $table->integer('type')->unsigned();
            $table->integer('place')->unsigned()->nullable();
            $table->string('url');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->integer('category')->unsigned()->nullable();
            $table->string('position',60)->nullable();
            $table->string('description')->nullable();
            $table->string('contact')->nullable();
            $table->integer('user')->unsigned();
            $table->timestamps();
            $table->foreign('type')->references('id')->on('type_of_publications');
            $table->foreign('user')->references('id')->on('users');
            $table->foreign('place')->references('id')->on('places');
            $table->foreign('category')->references('id')->on('type_of_scientific_magazines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('publications');
    }
}
