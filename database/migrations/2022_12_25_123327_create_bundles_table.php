<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBundlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bundles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id')->index();
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->unsignedBigInteger('product_id')->index();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->unsignedBigInteger('product_specification_id')->index();
            $table->foreign('product_specification_id')->references('id')->on('product_specifications')->onDelete('cascade');
            $table->unsignedBigInteger('accessory_id')->index();
            $table->foreign('accessory_id')->references('id')->on('accessories')->onDelete('cascade');
            $table->unsignedBigInteger('accessory_specification_id')->index();
            $table->foreign('accessory_specification_id')->references('id')->on('accessory_specifications')->onDelete('cascade');
            $table->string('price');
            $table->string('slug');
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
        Schema::dropIfExists('bundles');
    }
}
