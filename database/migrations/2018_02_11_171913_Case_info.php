<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CaseInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Case_info', function (Blueprint $table) {
            $table->timestamps();
            $table->softDeletes();
             $table->increments('Case_ID')->nullable();
             $table->string('First_Name')->nullable();
             $table->string('Last_Name')->nullable();
             $table->string('Father_Name')->nullable();
             $table->string('Mother_Name')->nullable();
             $table->string('Birth_Date')->nullable();
             $table->string('Birth_Place')->nullable();
             $table->string('Nationality_Name')->nullable();
             $table->string('Nationality_ID')->nullable();
             $table->string('nationalism_ID')->nullable();
             $table->string('Religion_sect')->nullable();
             $table->string('Address_before_arrest')->nullable();
             $table->string('Current_Address')->nullable();
             $table->string('Phone_Number')->nullable();
             $table->string('Email_Address')->nullable();
             $table->string('regions_RegionID')->nullable();
             $table->string('Release_way')->nullable();
             $table->string('Civil_Arrest_Status')->nullable();
             $table->string('Civil_Arrest_Status_update')->nullable();
             $table->string('Current_civil_status')->nullable();
             $table->string('Accreditation_at_arrest')->nullable();
             $table->string('Effect_of_detention_on_educational_attainment')->nullable();
             $table->string('Educational_attainment')->nullable();
             $table->string('job_when_you_are_arrested')->nullable();
             $table->string('current_job')->nullable();
             $table->string('effect_of_detention_on_your_previous_job')->nullable();
             $table->string('Physical_torture')->nullable();
             $table->string('Psychological_torture')->nullable();
             $table->string('Damage')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Case_info');
    }
}
