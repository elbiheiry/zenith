<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapacityTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacity_translations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('capacity_id');
            $table->string('locale')->index();
            $table->unique(['capacity_id', 'locale']);
            $table->foreign('capacity_id')->references('id')->on('capacities')->onDelete('cascade');
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
        Schema::dropIfExists('capacity_translations');
    }
}
