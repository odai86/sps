<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetentionInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Detention_info', function (Blueprint $table) {
             $table->timestamps();
             $table->increments('Detention_ID');
             $table->softDeletes();
             $table->string('Charge')->nullable();
             $table->date('Detention_Date')->nullable();
             $table->date('Date_Of_Release')->nullable();
             $table->integer('Security_Branch_ID')->nullable();
             $table->string('Detention_Details')->nullable();
             $table->string('Authorized_Arrest')->nullable();
             $table->string('Detention_Place')->nullable();
             $table->integer('personal_information_Case_ID')->nullable();
             $table->integer('regions_RegionID')->nullable();
             $table->integer('security_branches_Security_branche_ID')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Detention_info');
    }
}
