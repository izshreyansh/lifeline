<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonProductivesTable extends Migration
{
    public function up()
    {
        Schema::create('non_productives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reason');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
