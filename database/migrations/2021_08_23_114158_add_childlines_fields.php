<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChildlinesFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('childlines', function (Blueprint $table) {
            $table->string('referred_to_name')->nullable();
            $table->string('referred_to_contact')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('childlines', function (Blueprint $table) {
            $table->dropColumn('referred_to_name');
            $table->dropColumn('referred_to_contact');
        });
    }
}
