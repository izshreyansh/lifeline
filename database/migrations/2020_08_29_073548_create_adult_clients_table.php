<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdultClientsTable extends Migration
{
    public function up()
    {
        Schema::create('adult_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->nullable();
            $table->string('telephone')->nullable();
            $table->string('province');
            $table->string('district');
            $table->string('gender');
            $table->string('age');
            $table->string('medium');
            $table->longText('counselling_notes')->nullable();
            $table->string('status')->nullable();
            $table->longText('incident_description')->nullable();
            $table->datetime('follow_up')->nullable();
            $table->string('follow_up_phone')->nullable();
            $table->string('referred_to')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
