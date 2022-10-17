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
            $table->string('type');
            $table->integer('propery_type_id');
            $table->decimal('price');
            $table->longText('title');
            $table->longText('description');
            $table->integer('city_id');
            $table->decimal('space');
            $table->integer('place_id');
            $table->integer('office_id')->nullable();
            $table->integer('author_id')->nullable();
            $table->longText('address');
            $table->tinyInteger('status')->default('0');
            $table->integer('rooms');
            $table->integer('salons');
            $table->integer('baths');
            $table->string('floor');
            $table->integer('direction_id');
            $table->integer('cladding_id');
            $table->string('mobile_phone');
            $table->string('image');
            $table->integer('floors');
            $table->longText('divider');
            $table->integer('views')->default('0');
            $table->tinyInteger('has_elevator')->default('0');
            $table->tinyInteger('has_generator')->default('0');
            $table->tinyInteger('has_terrace')->default('0');
            $table->tinyInteger('has_pool')->default('0');
            $table->tinyInteger('has_conditioner')->default('0');
            $table->tinyInteger('has_saona')->default('0');
            $table->tinyInteger('has_garag')->default('0');
            $table->tinyInteger('has_shofag')->default('0');
            $table->tinyInteger('has_jacuzzi')->default('0');
            $table->tinyInteger('has_garden')->default('0');
            $table->timestamp('deleted_at')->nullable();
            $table->string('slug');
            $table->longText('seo_title');
            $table->longText('seo_description');
            $table->longText('long')->nullable();
            $table->longText('lat')->nullable();
            $table->tinyInteger('is_feature')->default('0');
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
        Schema::dropIfExists('properties');
    }
}
