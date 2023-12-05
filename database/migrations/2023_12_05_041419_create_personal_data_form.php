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
        Schema::create('personal_data_form', function (Blueprint $table) {
            $table->string('firstName');
            $table->string('lastName');
            $table->boolean('gender');
            $table->string('placeOfBirth');
            $table->integer('age');
            $table->string('eKtp');
            $table->string('occupation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_data_form');
    }
};
