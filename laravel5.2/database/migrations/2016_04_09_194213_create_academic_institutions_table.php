<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable()->unique();
            $table->string('description')->nullable();            
            $table->integer('place')->unsigned();
            $table->integer('type')->unsigned();
            $table->timestamps();
            $table->foreign('place')->references('id')->on('places');
            $table->foreign('type')->references('id')->on('type_of_academic_institutions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('academic_institutions');
    }
}
