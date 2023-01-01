<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProgramTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_translations', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->unsignedBigInteger('program_id');
            $table->string('locale')->index();
            $table->unique(['program_id', 'locale']);
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('program_translations')->insert([
            'description' => 'description',
            'program_id' => 1,
            'locale' => 'en'
        ]);

        DB::table('program_translations')->insert([
            'description' => 'description',
            'program_id' => 1,
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
        Schema::dropIfExists('program_translations');
    }
}
