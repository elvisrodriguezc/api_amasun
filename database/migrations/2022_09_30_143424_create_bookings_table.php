<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('departure_id');
            $table->unsignedBigInteger('customer_id');
            $table->date('date');
            $table->time('time');
            $table->string('payment_code');
            $table->datetime('payment_datetime');
            $table->integer('adults');
            $table->integer('childs');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->foreign('departure_id')->references('id')->on('departures')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
