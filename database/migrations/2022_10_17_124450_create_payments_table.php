<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booking_id');
            $table->unsignedBigInteger('payment_method_id');
            $table->string('card_number',25)->nullable();
            $table->string('card_holder_name',50)->nullable();
            $table->string('op_number',20)->nullable();
            $table->date('op_date')->nullable();
            $table->time('op_time')->nullable();
            $table->string('source_id',50)->nullable();
            $table->string('device_session_id',50)->nullable();
            $table->float('amount');
            $table->string('currency',10);
            $table->string('description',100);
            $table->tinyInteger('use_card_points')->nullable();
            $table->timestamps();
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
