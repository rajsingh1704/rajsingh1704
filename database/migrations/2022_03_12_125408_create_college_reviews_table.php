<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegeReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('college_id');
            $table->string('student_name');
            $table->string('student_email');
            $table->string('course_name');
            $table->string('college_rating');
            $table->string('college_pros');
            $table->string('college_cons');
            $table->string('placement_rating');
            $table->string('placement_message');
            $table->string('recruiter_rating');
            $table->string('recruiter_message');
            $table->string('faculty_rating');
            $table->boolean('status')->default(0)->comment('0== Active, 1==Inactive');
            $table->boolean('isDeleted')->default(0)->comment('0==not Deleted, 1==Deleted');
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
        Schema::dropIfExists('college_reviews');
    }
}
