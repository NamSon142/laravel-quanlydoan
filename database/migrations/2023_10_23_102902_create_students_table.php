<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('phone');
            $table->date('birth');
            $table->tinyInteger('gender');
            $table->string('address');
            $table->string('avatar')->nullable();
            $table->double('gpa');
            $table->tinyInteger('status')->default(1);
            $table->integer('user_id')->unsigned();
            $table->integer('major_id')->unsigned();
            $table->integer('school_year_id')->unsigned();
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
        Schema::dropIfExists('students');
    }
}
