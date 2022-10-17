<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('status')->nullable();
            $table->longText('fcm_token')->nullable();
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->string('slug');
            $table->longText('long')->nullable();
            $table->longText('lat')->nullable();
            $table->string('mobile_number');
            $table->string('social_id')->nullable();
            $table->string('social_type')->nullable();
            $table->integer('plan_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
