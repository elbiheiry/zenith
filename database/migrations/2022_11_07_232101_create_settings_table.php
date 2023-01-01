<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('phone');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('instagram')->nullable();
            $table->text('map');
            $table->timestamps();
        });

        DB::table('settings')->insert([
            'email' => 'info@zenitharabia.com',
            'phone' => '+966 (11) 4192270',
            'facebook' => 'https://www.facebook.com/profile.php?id=100032330966914',
            'twitter' => 'https://twitter.com/zenitharabia?lang=en',
            'linkedin' => 'https://www.linkedin.com/company/zenith-arabia/',
            'youtube' => '',
            'instagram' => '',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.273095713444!2d46.67139311537481!3d24.71750290705881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03a9ddf0fcab%3A0xb79ffa5284283c95!2sZenith%20Arabia!5e0!3m2!1sen!2seg!4v1667042130361!5m2!1sen!2seg'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
