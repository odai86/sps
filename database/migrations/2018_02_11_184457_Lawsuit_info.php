<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LawsuitInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lawsuit_info', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('Lawsuit_ID');
            $table->softDeletes();
            $table->integer('Tribunal_ID')->nullable();
            $table->string('Name_of_judge')->nullable();
            $table->string('prosecutor_Name')->nullable();
            $table->string('Charge_Name')->nullable();
            $table->string('Charge_Type')->nullable();
            $table->date('Lawsuit_Date')->nullable();
            $table->string('statute_ID')->nullable();
            $table->integer('personal_information_Case_ID')->nullable();
            $table->integer('prison_information_ID')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Lawsuit_info');
    }
}
