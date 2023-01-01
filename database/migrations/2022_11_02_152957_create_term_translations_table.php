<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTermTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_translations', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->unsignedBigInteger('term_id');
            $table->string('locale')->index();
            $table->unique(['term_id', 'locale']);
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('term_translations')->insert([
            'description' => 'description',
            'term_id' => 1,
            'locale' => 'en'
        ]);

        DB::table('term_translations')->insert([
            'description' => 'description',
            'term_id' => 1,
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
        Schema::dropIfExists('term_translations');
    }
}
