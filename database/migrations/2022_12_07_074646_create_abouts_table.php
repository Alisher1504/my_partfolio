<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('about_title');
            $table->string('about_description');
            $table->string('skilles_title');
            $table->string('skilles_description');
            $table->string('brithday');
            $table->string('website');
            $table->string('phone');
            $table->string('city');
            $table->string('age');
            $table->string('degree');
            $table->string('email');
            $table->string('freelance');
            $table->string('big_description');
            $table->string('facts');
            $table->string('facts_description');
            $table->string('happy_clients');
            $table->string('projecs');
            $table->string('hours_of_support');
            $table->string('team');
            $table->string('skills');
            $table->string('skills_description');
            $table->string('name');
            $table->string('name_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
};
