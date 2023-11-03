<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theses', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->date('start_date');
            $table->date('complete_date');
            $table->date('thesis_start_date');
            $table->date('thesis_end_date');
            $table->string('file_path');
            $table->text('comment')->nullable();
            $table->double('total_score');
            $table->string('result');
            $table->integer('topic_id')->unsigned();
            $table->integer('major_id')->unsigned();
            $table->integer('school_year_id')->unsigned();
            $table->integer('council_id')->unsigned();
            $table->integer('lecturer_id')->unsigned();
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
        Schema::dropIfExists('theses');
    }
}
