<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_details', function (Blueprint $table) {
            $table->id();
            $table->string('college_name');
            $table->string('address');
            $table->string('city');
            $table->string('pincode');
            $table->string('established');
            $table->string('approved_by');
            $table->longText('about')->nullable();
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('college_details');
    }
}
