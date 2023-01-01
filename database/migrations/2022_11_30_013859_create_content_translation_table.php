<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateContentTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_translations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->text('description');
            $table->unsignedBigInteger('content_id');
            $table->string('locale')->index();
            $table->unique(['content_id', 'locale']);
            $table->foreign('content_id')->references('id')->on('contents')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('content_translations')->insert([
            'title' => 'title',
            'description' => 'description',
            'subtitle' => 'subtitle',
            'locale' => 'en',
            'content_id' => 1
        ]);
        DB::table('content_translations')->insert([
            'title' => 'title',
            'description' => 'description',
            'subtitle' => 'subtitle',
            'locale' => 'ar',
            'content_id' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_translations');
    }
}
