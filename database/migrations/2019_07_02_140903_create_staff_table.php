<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cp')->unique();
            $table->string('name');
            $table->string('nrc');
            $table->string('nrc_no');
            $table->string('dob');
            $table->string('fatherName');
            $table->string('fatherJob');
            $table->string('motherName');
            $table->string('motherJob');
            $table->string('nationality');
            $table->string('religion');
            $table->string('gender');
            $table->string('maritalStatus');
            $table->string('bloodGroup');
            $table->bigInteger('currentHotel')->nullable();
            $table->bigInteger('currentPosition')->nullable();
            $table->string('education')->nullable();
            $table->string('qualification')->nullable();
            $table->string('otherQualification')->nullable();
            $table->string('achievement')->nullable();
            $table->string('address');
            $table->string('phoneNo');
            $table->string('workExperience')->nullable();
            $table->string('photo');
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
        Schema::dropIfExists('staff');
    }
}
