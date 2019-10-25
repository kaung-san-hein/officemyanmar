<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviousHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('staff_name');
            $table->bigInteger('hotel_name');
            $table->bigInteger('position');
            $table->string('start_date');
            $table->string('end_date');
            $table->text('remark')->nullable();
            $table->string('manager_name');
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
        Schema::dropIfExists('previous_hotels');
    }
}
