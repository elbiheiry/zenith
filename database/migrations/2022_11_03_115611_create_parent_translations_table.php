<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateParentTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_translations', function (Blueprint $table) {
            $table->id();
            $table->text('description1');
            $table->text('description2');
            $table->unsignedBigInteger('parent_id');
            $table->string('locale')->index();
            $table->unique(['parent_id', 'locale']);
            $table->foreign('parent_id')->references('id')->on('parents')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('parent_translations')->insert([
            'description1' => 'description1',
            'description2' => 'description2',
            'locale' => 'en',
            'parent_id' => 1
        ]);

        DB::table('parent_translations')->insert([
            'description1' => 'description1',
            'description2' => 'description2',
            'locale' => 'ar',
            'parent_id' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parent_translations');
    }
}
