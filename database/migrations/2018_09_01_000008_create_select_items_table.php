<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('select_items', function (Blueprint $table) {
            $table->string('field', 30);
            $table->unsignedTinyInteger('value');
            $table->string('label', 60);
            $table->primary(['field', 'value', 'label']);
            $table->unsignedTinyInteger('order')->index()->nullable();
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
        Schema::dropIfExists('select_items');
    }
}
