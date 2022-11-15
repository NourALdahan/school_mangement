<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudantInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studant_infos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('studant_id')->unsigned();
            $table->integer('class');
            $table->integer('division');
            $table->timestamps();
            $table->foreign('studant_id')->references('id')->on('studants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studant_infos');
    }
}
