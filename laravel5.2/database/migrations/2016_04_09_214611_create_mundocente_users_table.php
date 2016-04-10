<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMundocenteUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mundocente_users', function (Blueprint $table) {
            $table->string('username');
            $table->primary('username');
            $table->string('password');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('phone')->nullable()->unique();
            $table->string('contact')->nullable();
            $table->integer('academic_institution')->unsigned();
            $table->integer('type')->unsigned();
            $table->timestamps();
            $table->foreign('academic_institution')->references('id')->on('academic_institutions');
            $table->foreign('type')->references('id')->on('type_of_mundocente_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mundocente_users');
    }
}
