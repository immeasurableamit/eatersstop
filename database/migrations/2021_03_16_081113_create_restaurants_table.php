<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{

    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('rating');
            $table->integer('phone');
            $table->string('email');
            $table->string('address');
            $table->string('state');
            $table->string('featured_image');
            $table->string('upload_photo');
            $table->string('charge_night');
            $table->integer('landline');
            $table->integer('fax');
            $table->string('city');
            $table->integer('owner_contact');
            $table->string('upload_gallery');
            $table->string('description');
            $table->string('amenities');
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
        Schema::dropIfExists('restaurants');
    }
}
