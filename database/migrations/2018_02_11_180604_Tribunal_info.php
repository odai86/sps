<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TribunalInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tribunal_info', function (Blueprint $table) {
            $table->timestamps();
            $table->softDeletes();
            $table->increments('Tribunal_ID');
            $table->string('Tribunal_Name')->nullable();
            $table->string('Tribunal_type')->nullable();
            $table->string('Tribunal_information')->nullable();
            $table->integer('legislation_information_legislation_ID')->nullable();
            $table->string('prison_information_ID')->nullable();
            $table->string('personal_information_Case_ID')->nullable();
            $table->string('Judgment')->nullable();
            $table->string('Forfeit')->nullable();
            $table->string('confiscated_property')->nullable();
            $table->string('Civil_rights')->nullable();
            $table->string('Military_rights')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tribunal_info');
    }
}
