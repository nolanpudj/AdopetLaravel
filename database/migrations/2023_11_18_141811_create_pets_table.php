<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('petName', 120);
            $table->enum('petType', ['Dog', 'Cat', 'Bird', 'Fish', 'Reptiles', 'Exotic']);
            $table->string('petBreed');
            $table->string('image');
            $table->enum('status', ['adopted', 'not adopted']);
            $table->enum('gender', ['Male', 'Female']);
            $table->string('health');
            $table->unsignedBigInteger('shelter_id');
            $table->timestamps();

            $table->foreign('shelter_id')->references('id')->on('shelters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
};
