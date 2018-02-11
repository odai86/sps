<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrisonInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Prison_info', function (Blueprint $table) {
           $table->timestamps();
           $table->increments('Prison_ID');
           $table->softDeletes();
           $table->date('Entry_Date')->nullable();
           $table->date('Departure_Date')->nullable();
           $table->integer('Related_Detention_ID')->nullable();
           $table->string('Prison_Details')->nullable();
           $table->integer('personal_information_Case_ID')->nullable();
           $table->integer('detention_information_Detention_ID')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Prison_info');
    }
}
