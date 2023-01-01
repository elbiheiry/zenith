<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInputsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('code')->after('email');
            $table->unsignedBigInteger('school_id')->index()->after('code');
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->string('parent')->after('code');
            $table->string('grade')->after('code');
            $table->string('phone')->after('code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
