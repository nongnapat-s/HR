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
            $table->unsignedSmallInteger('person_id')->index();
            $table->foreign('person_id')->references('id')->on('persons');
            $table->unsignedSmallInteger('relative_id')->index();
            $table->foreign('relative_id')->references('id')->on('persons');
            $table->unsignedTinyInteger('relation')->default(0);
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
