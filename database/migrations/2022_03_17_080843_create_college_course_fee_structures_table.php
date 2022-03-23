<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegeCourseFeeStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_course_fee_structures', function (Blueprint $table) {
            $table->id();
            $table->integer('college_id');
            $table->string('course');
            $table->string('duration');
            $table->string('total_fees');
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
        Schema::dropIfExists('college_course_fee_structures');
    }
}
