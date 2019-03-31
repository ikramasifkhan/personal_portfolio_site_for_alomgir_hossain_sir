<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('code');
            $table->integer('credit_hours');
            $table->string('pre_request');
            $table->string('consult_hour');
            $table->string('book_name');
            $table->text('course_objective');
            $table->text('short_description');
            $table->text('long_description');
            $table->integer('first_term');
            $table->integer('mid_term');
            $table->integer('final');
            $table->integer('ohter_mark');
            $table->string('course_pic');
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('courses');
    }
}
