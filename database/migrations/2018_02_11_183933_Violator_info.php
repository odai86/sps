<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ViolatorInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Violator_info', function (Blueprint $table) {
             $table->increments('Violator_ID');
             $table->timestamps();
             $table->softDeletes();
             $table->string('First_Name')->nullable();
             $table->string('Last_Name')->nullable();
             $table->string('nickname')->nullable();
             $table->string('address')->nullable();
             $table->string('Phone')->nullable();
             $table->string('Community')->nullable();
             $table->string('position')->nullable();
             $table->string('Nationality')->nullable();
             $table->string('Rank')->nullable();
             $table->string('Detention_associated')->nullable();
             $table->string('prison_associated')->nullable();
             $table->string('Enforced_disappearance_associated')->nullable();
             $table->string('Other_information')->nullable();
             $table->integer('personal_information_Case_ID')->nullable();
             $table->integer('detention_information_Detention_ID')->nullable();
             $table->integer('security_branches_Security_branche_ID')->nullable();
             $table->string('Location')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Violator_info');
    }
}
