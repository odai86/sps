<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtortionInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Extortion_info', function (Blueprint $table) {
            $table->timestamps();
            $table->softDeletes();
            $table->increments('Extortion_ID');
            $table->date('Date')->nullable();
            $table->string('Extortio_type')->nullable();
            $table->string('Person_name')->nullable();
            $table->string('Value')->nullable();
            $table->integer('personal_information_Case_ID')->nullable();
            $table->integer('detention_information_Detention_ID')->nullable();
            $table->integer('prison_information_ID')->nullable();
            $table->integer('lawsuit_information_Lawsuit_ID')->nullable();
            $table->integer('Tribunal_information_Tribunal_ID')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Extortion_info');
    }
}
