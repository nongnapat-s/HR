<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Symfony\Component\Routing\Generator\Dumper\GeneratorDumper;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->foreign('id')->references('id')->on('persons');
            $table->string('org_id');                                               // encrypt
            $table->unsignedTinyInteger('extra_title_id')->index()->default(0);     // default คุณ
            $table->foreign('extra_title_id')->references('id')->on('titles');
            $table->unsignedTinyInteger('academic_title_id')->index()->default(0);  // default คุณ
            $table->foreign('academic_title_id')->references('id')->on('titles');
            $table->unsignedTinyInteger('status_id')->index();
            $table->foreign('status_id')->references('id')->on('status');
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
        Schema::dropIfExists('employees');
    }
}
