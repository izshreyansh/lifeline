<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildlinesTable extends Migration
{
    public function up()
    {
        Schema::create('childlines', function (Blueprint $table) {
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
            $table->string('mother_first_name')->nullable();
            $table->string('mother_last_name')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('father_first_name')->nullable();
            $table->string('father_last_name')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('guardian_first_name')->nullable();
            $table->string('guardian_last_name')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->datetime('follow_up')->nullable();
            $table->string('follow_up_phone')->nullable();
            $table->string('time')->nullable()->default('3 min');
            $table->string('referred_to')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
