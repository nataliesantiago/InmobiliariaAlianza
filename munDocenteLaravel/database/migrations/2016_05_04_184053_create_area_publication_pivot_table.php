<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaPublicationPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_publication', function (Blueprint $table) {
            $table->integer('area_id')->unsigned()->index();
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->integer('publication_id')->unsigned()->index();
            $table->foreign('publication_id')->references('id')->on('publications')->onDelete('cascade');
            $table->primary(['area_id', 'publication_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('area_publication');
    }
}
