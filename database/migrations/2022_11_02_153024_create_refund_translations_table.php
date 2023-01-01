<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRefundTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refund_translations', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->unsignedBigInteger('refund_id');
            $table->string('locale')->index();
            $table->unique(['refund_id', 'locale']);
            $table->foreign('refund_id')->references('id')->on('refunds')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('refund_translations')->insert([
            'description' => 'description',
            'refund_id' => 1,
            'locale' => 'en'
        ]);

        DB::table('refund_translations')->insert([
            'description' => 'description',
            'refund_id' => 1,
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
        Schema::dropIfExists('refund_translations');
    }
}
