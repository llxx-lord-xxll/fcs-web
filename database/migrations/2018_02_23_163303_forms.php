<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Forms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::dropIfExists('form_contact');
        Schema::dropIfExists('form_delegates');
        Schema::dropIfExists('form_chapter_application');
        Schema::dropIfExists('form_chapter_recruitment');

        Schema::create('form_contact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('country');
            $table->string('mob');
            $table->string('message');
            $table->integer('seen')->default(0);
            $table->timestamp('created_at')->useCurrent();
        });


        Schema::create('form_delegates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('preferred_name');
            $table->string('passport');
            $table->string('nationality');
            $table->string('city');
            $table->string('occupation');
            $table->string('university')->nullable();
            $table->string('company')->nullable();
            $table->string('ministry')->nullable();
            $table->string('email')->unique();
            $table->string('mob')->unique();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('scholarhub')->nullable();
            $table->string('pitching_deck')->nullable();
            $table->string('purpose')->nullable();
            $table->string('city_message');
            $table->string('track_conference');
            $table->string('chapter_referral');
            $table->string('referred_person')->nullable();
            $table->string('fcs_package')->nullable();
            $table->string('scholarship');
            $table->string('newsletter_subscription');
            $table->integer('seen')->default(0);
            $table->timestamp('created_at')->useCurrent();
        });


        Schema::create('form_chapter_application', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nationality');
            $table->string('occupation');
            $table->string('university')->nullable();
            $table->string('company')->nullable();
            $table->string('ministry')->nullable();
            $table->string('email')->unique();
            $table->string('mob')->unique();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('scholarhub')->nullable();
            $table->string('pitching_deck')->nullable();
            $table->string('chapter_name');
            $table->integer('seen')->default(0);
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::create('form_chapter_recruitment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nationality');
            $table->string('occupation');
            $table->string('university');
            $table->string('company');
            $table->string('ministry');
            $table->string('email')->unique();
            $table->string('mob')->unique();
            $table->string('facebook');
            $table->string('linkedin');
            $table->string('scholarhub');
            $table->string('pitching-deck');
            $table->string('resume');
            $table->integer('seen')->default(0);
            $table->timestamp('created_at')->useCurrent();
        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_contact');
        Schema::dropIfExists('form_delegates');
        Schema::dropIfExists('form_chapter_application');
        Schema::dropIfExists('form_chapter_recruitment');
    }
}
