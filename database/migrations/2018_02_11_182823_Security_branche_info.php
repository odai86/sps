<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SecurityBrancheInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Security_branche_info', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('Security_branche_ID')->nullable();
            $table->string('Branche_Name')->nullable();
            $table->string('Branche_Type')->nullable();
            $table->string('Branche_Details')->nullable();
            $table->integer('regions_RegionID')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Security_branche_info');
    }
}
