<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegionInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Region_info', function (Blueprint $table) {
           $table->timestamps();
           $table->increments('Region_ID');
           $table->softDeletes();
           $table->string('Governorate')->nullable();
           $table->string('Region')->nullable();
           $table->string('City')->nullable();
           $table->string('Town')->nullable();
           $table->string('Village')->nullable();
           $table->string('Street')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Region_info');
    }
}
