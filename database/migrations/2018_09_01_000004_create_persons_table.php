<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->unsignedTinyInteger('title_id')->index()->default(0);           // default คุณ
            $table->foreign('title_id')->references('id')->on('titles');
            $table->string('first_name');                                           // encrypt
            $table->string('first_name_eng');                                       // encrypt
            $table->string('last_name');                                            // encrypt
            $table->string('last_name_eng');                                        // encrypt
            $table->string('middle_name')->nullable();                              // encrypt
            $table->string('middle_name_eng')->nullable();                          // encrypt
            $table->string('nickname')->nullable();                                 // encrypt
            $table->date('dob')->nullable();
            $table->boolean('gender')->default(false);
            $table->unsignedTinyInteger('blood_group')->nullable();
            $table->unsignedTinyInteger('race')->nullable();
            $table->unsignedTinyInteger('nation')->nullable();
            $table->unsignedTinyInteger('religion')->nullable();
            $table->unsignedTinyInteger('marital_status')->nullable();
            $table->string('document_no')->nullable();                              // encrypt
            $table->unsignedTinyInteger('career')->nullable();
            $table->string('contact_address')->nullable();                          // encrypt
            $table->unsignedSmallInteger('contact_postcode_id')->nullable();
            $table->foreign('contact_postcode_id')->references('id')->on('postcodes');
            $table->string('contact_phone_no')->nullable();                         // encrypt
            $table->string('potrait')->nullable();
            $table->boolean('alive')->default(true);
            $table->timestamps(3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
