<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAboutTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_translations', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->string('subtitle');
            $table->text('description1');
            $table->string('title2');
            $table->text('description2');
            $table->unsignedBigInteger('about_id');
            $table->string('locale')->index();
            $table->unique(['about_id', 'locale']);
            $table->foreign('about_id')->references('id')->on('abouts')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('about_translations')->insert([
            'title1' => 'title',
            'subtitle' => 'subttitle',
            'description1' => 'description',
            'title2' => 'title2',
            'description2' => 'description',
            'locale' => 'en',
            'about_id' => 1
        ]);

        DB::table('about_translations')->insert([
            'title1' => 'title',
            'subtitle' => 'subttitle',
            'description1' => 'description',
            'title2' => 'title2',
            'description2' => 'description',
            'locale' => 'ar',
            'about_id' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_translations');
    }
}
