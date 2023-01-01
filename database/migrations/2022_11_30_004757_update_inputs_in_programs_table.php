<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInputsInProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->string('image1')->after('id');
            $table->string('image2')->after('image1');
            $table->string('image3')->after('image2');
        });

        Schema::table('program_translations', function (Blueprint $table) {
            $table->string('title')->after('id');
            $table->string('subtitle')->after('title');
            $table->text('description1')->after('description');
            $table->text('description2')->after('description1');
            $table->text('description3')->after('description2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('programs', function (Blueprint $table) {
            //
        });
    }
}
