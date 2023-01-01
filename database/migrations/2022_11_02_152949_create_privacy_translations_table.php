<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePrivacyTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privacy_translations', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->unsignedBigInteger('privacy_id');
            $table->string('locale')->index();
            $table->unique(['privacy_id', 'locale']);
            $table->foreign('privacy_id')->references('id')->on('privacies')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('privacy_translations')->insert([
            'description' => 'description',
            'privacy_id' => 1,
            'locale' => 'en'
        ]);

        DB::table('privacy_translations')->insert([
            'description' => 'description',
            'privacy_id' => 1,
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
        Schema::dropIfExists('privacy_translations');
    }
}
