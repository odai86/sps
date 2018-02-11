<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrisonesInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prisones_info', function (Blueprint $table) {
             $table->timestamps();
             $table->softDeletes();
             $table->increments('prisones_ID');
             $table->string('First_Name')->nullable();
             $table->string('Last_Name')->nullable();
             $table->string('nickname')->nullable();
             $table->string('address')->nullable();
             $table->string('Phone')->nullable();
             $table->string('Community')->nullable();
             $table->string('Nationality')->nullable();
             $table->string('work')->nullable();
             $table->string('studying')->nullable();
             $table->integer('Detention_associated')->nullable();
             $table->integer('prison_associated')->nullable();
             $table->integer('Enforced_disappearance_associated')->nullable();
             $table->string('Location')->nullable();
             $table->string('Other_information')->nullable();
             $table->integer('personal_information_Case_ID')->nullable();
             $table->integer('detention_information_Detention_ID')->nullable();
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
        Schema::dropIfExists('prisones_info');
    }
}
