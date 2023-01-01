<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInputsInProductSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_specifications', function (Blueprint $table) {
            $table->unsignedBigInteger('color_id')->index()->after('sku');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
        });
        Schema::table('product_images', function (Blueprint $table) {
            $table->dropForeign('product_images_product_specification_id_foreign');
            $table->dropColumn('product_specification_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_specifications', function (Blueprint $table) {
            //
        });
    }
}
