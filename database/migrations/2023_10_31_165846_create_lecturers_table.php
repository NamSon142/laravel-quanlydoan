<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->date('birth');
            $table->tinyInteger('gender');
            $table->string('address');
            $table->string('avatar')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('position_id')->unsigned();
            $table->integer('department_id')->unsigned();
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
        Schema::dropIfExists('lecturers');
    }
}
