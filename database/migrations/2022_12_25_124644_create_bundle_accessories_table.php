<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBundleAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bundle_accessories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bundle_id')->index();
            $table->foreign('bundle_id')->references('id')->on('bundles')->onDelete('cascade');
            $table->unsignedBigInteger('accessory_id')->index();
            $table->foreign('accessory_id')->references('id')->on('accessories')->onDelete('cascade');
            $table->unsignedBigInteger('accessory_specification_id')->index();
            $table->foreign('accessory_specification_id')->references('id')->on('accessory_specifications')->onDelete('cascade');
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
        Schema::dropIfExists('bundle_accessories');
    }
}
