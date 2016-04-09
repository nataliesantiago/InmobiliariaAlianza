<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('area', function (Blueprint $table) {
            $table->increments('id',11);
            $table->string('name',60);
            $table->string('description',120)->nullable();
            $table->integer('parent',11);

            $table->foreign('parent',11)
                  ->references('id',11)
                  ->on('area')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('area', function (Blueprint $table) {
            Schema::drop('area');
        });
    }
}
