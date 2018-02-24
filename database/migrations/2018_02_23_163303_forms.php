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
        Schema::dropIfExists('form_data');
        Schema::dropIfExists('form_submissions');
        Schema::dropIfExists('form_fields');
        Schema::dropIfExists('forms');

        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('form_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('forms_id')->unsigned()->index();;
            $table->foreign('forms_id')->references('id')->on('forms')->onDelete('cascade');
            $table->string('field_name');
        });

        Schema::create('form_submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('forms_id')->unsigned();
            $table->foreign('forms_id')->references('id')->on('forms')->onDelete('cascade');
            $table->timestamps();
        });

        DB::update("ALTER TABLE form_submissions AUTO_INCREMENT = 1000;");

        Schema::create('form_data', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('submission_id')->unsigned();
            $table->foreign('submission_id')->references('id')->on('form_submissions')->onDelete('cascade');
            $table->integer('field_id')->unsigned();
            $table->foreign('field_id')->references('id')->on('form_fields')->onDelete('cascade');
            $table->string('field_data',1000);
            $table->primary(['id','submission_id','field_id']);
        });

        DB::update("ALTER TABLE form_data MODIFY COLUMN id INT auto_increment");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_data');
        Schema::dropIfExists('form_submissions');
        Schema::dropIfExists('form_fields');
        Schema::dropIfExists('forms');
    }
}
