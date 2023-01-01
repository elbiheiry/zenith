<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessorySpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessory_specifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('accessory_id')->index();
            $table->foreign('accessory_id')->references('id')->on('accessories')->onDelete('cascade');
            $table->decimal('price');
            $table->string('sku');
            $table->unsignedBigInteger('color_id')->index()->nullable();
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->string('locale')->nullable();
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
        Schema::dropIfExists('accessory_specifications');
    }
}
