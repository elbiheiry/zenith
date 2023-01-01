<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateShippingTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_translations', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->unsignedBigInteger('shipping_id');
            $table->string('locale')->index();
            $table->unique(['shipping_id', 'locale']);
            $table->foreign('shipping_id')->references('id')->on('shippings')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('shipping_translations')->insert([
            'description' => 'description',
            'shipping_id' => 1,
            'locale' => 'en'
        ]);

        DB::table('shipping_translations')->insert([
            'description' => 'description',
            'shipping_id' => 1,
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
        Schema::dropIfExists('shipping_translations');
    }
}
