<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuteena500Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muteena', function (Blueprint $table) {
            $table->increments('id');
            $table->string('land_number_id')->unique();
            $table->string('property_no');
            $table->string('plan_type');
            $table->string('style');
            $table->string('land_area');
            $table->string('property_area');
            $table->string('no_of_bedroom');
            $table->string('no_of_bathroom');
            $table->string('total_built_area');
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
        Schema::drop('muteena');
    }
}
