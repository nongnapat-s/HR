<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titles', function (Blueprint $table) {
            $table->unsignedTinyInteger('id');
            $table->primary('id');
            $table->string('name', 120);
            $table->string('name_short', 60);
            $table->string('name_eng', 120);
            $table->string('name_eng_short', 60);
            $table->unsignedTinyInteger('gender')->default(2); // 0:female, 1:male, 2:both
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
        Schema::dropIfExists('titles');
    }
}
