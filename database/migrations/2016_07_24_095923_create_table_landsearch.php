<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLandsearch extends Migration
{
    /**
     * 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landsearch', function (Blueprint $table) {
            $table->increments('id');
            $table->string('land_number_id')->unique();
            $table->string('land_use');
            $table->string('plan');
            $table->string('beneficiary');
            $table->string('owners_name');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('areasqft');
            $table->string('areasqm');
            $table->string('areaname');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('landsearch');
    }
}
