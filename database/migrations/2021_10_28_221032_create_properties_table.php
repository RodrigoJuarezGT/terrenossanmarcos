<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_category_id')->nullable;
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('tittle');
            $table->string('address');
            $table->string('price');
            $table->text('description');
            $table->string('facebook_link')->nullable();
            $table->text('map_link')->nullable();
            $table->string('map_route_link')->nullable();
            $table->string('video')->nullable();
            $table->string('render1')->nullable();
            $table->string('render2')->nullable();
            $table->string('render3')->nullable();
            $table->string('render4')->nullable();
            $table->string('render5')->nullable();
            $table->string('render6')->nullable();
            $table->string('floors')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('street')->nullable();
            $table->string('bottom')->nullable();
            $table->string('rooms')->nullable();
            $table->timestamps();

            $table->foreign('property_category_id')->references('id')->on('property_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
