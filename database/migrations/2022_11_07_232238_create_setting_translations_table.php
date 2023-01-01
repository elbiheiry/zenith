<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSettingTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_translations', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->unsignedBigInteger('setting_id');
            $table->string('locale')->index();
            $table->unique(['setting_id', 'locale']);
            $table->foreign('setting_id')->references('id')->on('settings')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('setting_translations')->insert([
            'address' => '6367 Al Ulaya 2716 Riyadh 12251',
            'locale' => 'en',
            'setting_id' => 1
        ]);

        DB::table('setting_translations')->insert([
            'address' => '6367 Al Ulaya 2716 Riyadh 12251',
            'locale' => 'ar',
            'setting_id' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting_translations');
    }
}
