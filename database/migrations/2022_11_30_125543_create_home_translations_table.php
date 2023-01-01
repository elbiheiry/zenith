<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateHomeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_translations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->text('description1');
            $table->string('title1');
            $table->text('description2');
            $table->unsignedBigInteger('home_id');
            $table->string('locale')->index();
            $table->unique(['home_id', 'locale']);
            $table->foreign('home_id')->references('id')->on('homes')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('home_translations')->insert([
            'title' => 'title',
            'subtitle' => 'subtitle',
            'description1' => 'description1',
            'title1' => 'title1',
            'description2' => 'description2',
            'home_id' => 1,
            'locale' => 'en'
        ]);
        DB::table('home_translations')->insert([
            'title' => 'title',
            'subtitle' => 'subtitle',
            'description1' => 'description1',
            'title1' => 'title1',
            'description2' => 'description2',
            'home_id' => 1,
            'locale' => 'ar'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_translations');
    }
}
