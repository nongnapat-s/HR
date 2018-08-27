<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatives', function (Blueprint $table) {
            $table->uuid('person_id');
            $table->foreign('person_id')->references('id')->on('persons');
            $table->uuid('relative_id');
            $table->foreign('relative_id')->references('id')->on('persons');
            $table->unsignedTinyInteger('relation')->index();
            $table->primary(['person_id', 'relative_id', 'relation']);
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
        Schema::dropIfExists('relatives');
    }
}