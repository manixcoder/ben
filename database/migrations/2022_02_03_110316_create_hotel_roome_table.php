<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelRoomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_roome', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('merchent_id');
            $table->string('room_for')->nullable();
            $table->string('number_of_room')->nullable();
            $table->string('booking_for')->nullable();
            $table->string('price_per_night')->nullable();
            $table->string('discount')->nullable();
            $table->longText('short_discription')->nullable();
            $table->string('room_sq_ft')->nullable();
            $table->string('num_beds')->nullable();
            $table->string('check_in')->nullable();
            $table->string('check_out')->nullable();
            $table->string('hotel_address')->nullable();
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
        Schema::dropIfExists('hotel_roome');
    }
}
