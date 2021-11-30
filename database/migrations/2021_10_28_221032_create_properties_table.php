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
            $table->unsignedBigInteger('property_category_id')->nullable();
            $table->string('active')->default('on');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('image7')->nullable();
            $table->string('image8')->nullable();
            $table->string('tittle');
            $table->string('address');
            $table->unsignedBigInteger('price');
            $table->text('description');
            $table->string('slug')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('coordinates')->nullable();
            $table->string('map_route_link')->nullable();
            $table->string('video')->nullable();
            $table->string('floors')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('street')->nullable();
            $table->string('bottom')->nullable();
            $table->text('rooms')->nullable();
            $table->timestamps();

            $table->foreign('property_category_id')->references('id')->on('property_categories')->onDelete('set null');
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
