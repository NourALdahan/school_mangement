<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSesone2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sesone2s', function (Blueprint $table) {
            $table->id();
            $table->string('name_sub');
            $table->float('value');
            $table->bigInteger('studant_id')->unsigned();
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
        Schema::dropIfExists('sesone2s');
    }
}
