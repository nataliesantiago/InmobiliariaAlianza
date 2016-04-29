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
            $table->string('name', 255);
            $table->string('email', 45)->unique();
            $table->string('phone', 15)->nullable()->unique();
            $table->string('description', 255)->nullable();            
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
