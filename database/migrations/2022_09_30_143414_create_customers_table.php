<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->unsignedBigInteger('document_id');
            $table->string('document_number',15);
            $table->string('country_code',50)->nullable();
            $table->string('phone',50);
            $table->string('email',50)->unique();
            $table->unsignedBigInteger('departamento_id')->nullable()->default(1);
            $table->unsignedBigInteger('provincia_id')->nullable()->default(1);
            $table->unsignedBigInteger('distrito_id')->nullable()->default(1);
            $table->string('address',100)->nullable();
            $table->string('remark',200)->nullable();
            $table->timestamps();
            $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');
            $table->foreign('provincia_id')->references('id')->on('provincias')->onDelete('cascade');
            $table->foreign('distrito_id')->references('id')->on('distritos')->onDelete('cascade');
            $table->foreign('document_id')->references('id')->on('documents')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
