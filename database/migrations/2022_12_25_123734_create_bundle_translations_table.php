<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBundleTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bundle_translations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('bundle_id');
            $table->string('locale')->index();
            $table->unique(['bundle_id', 'locale']);
            $table->foreign('bundle_id')->references('id')->on('bundles')->onDelete('cascade');
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
        Schema::dropIfExists('bundle_translations');
    }
}
