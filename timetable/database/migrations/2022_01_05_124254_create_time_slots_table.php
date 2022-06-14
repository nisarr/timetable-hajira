<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_slots', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('class_id')->unsigned(); 
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->integer('teacher_id')->unsigned(); 
            $table->foreign('teacher_id')->references('id')->on('teacher')->onDelete('cascade');
            $table->integer('course_id')->unsigned(); 
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->integer('room_id')->unsigned(); 
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            
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
        Schema::dropIfExists('time_slots');
    }
}
