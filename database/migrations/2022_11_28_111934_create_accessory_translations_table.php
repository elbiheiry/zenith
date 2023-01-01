<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessoryTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessory_translations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('overview');
            $table->unsignedBigInteger('accessory_id');
            $table->string('locale')->index();
            $table->unique(['accessory_id', 'locale']);
            $table->foreign('accessory_id')->references('id')->on('accessories')->onDelete('cascade');
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
        Schema::dropIfExists('accessory_translations');
    }
}
