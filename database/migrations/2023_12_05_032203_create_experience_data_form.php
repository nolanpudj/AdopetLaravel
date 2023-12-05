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
        Schema::create('experience_data_form', function (Blueprint $table) {
            $table->boolean('HavePetBefore');
            $table->string('petDoYouOwn');
            $table->string('petBehavior');
            $table->boolean('petInaCage');
            $table->string('petToShelter');
            $table->string('leaveYourPet');
            $table->string('irregularBehavior');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experience_data_form');
    }
};
