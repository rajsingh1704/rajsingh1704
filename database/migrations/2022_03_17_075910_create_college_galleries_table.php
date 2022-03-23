<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegeGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('college_id');
            $table->string('type')->comment('profile/gallery');
            $table->string('image');
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
        Schema::dropIfExists('college_galleries');
    }
}
