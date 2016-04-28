<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->nullable()->unique();
            $table->string('contact')->nullable();
            $table->integer('academic_institution')->unsigned();
            $table->integer('type')->unsigned();
            $table->foreign('type')->references('id')->on('type_of_mundocente_users');
            $table->foreign('academic_institution')->references('id')->on('academic_institutions');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
