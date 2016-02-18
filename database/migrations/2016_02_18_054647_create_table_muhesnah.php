<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMuhesnah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muhesnah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apartment_code')->unique();
            $table->string('building_no');
            $table->string('apartment_no');
            $table->string('no_of_bedrooms');
            $table->string('floor_no');
            $table->string('no_of_bathrooms');
            $table->string('area');
            $table->string('balcony');
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
        Schema::drop('muhesnah');
    }
}
