<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned();
            $table->float('avg_mark')->nullable();
            $table->string('photo')->nullable();
            $table->string('behaviour')->nullable();
            $table->string('name_studant')->nullable();
            $table->string('age')->nullable();
            $table->string('certificate')->nullable();
            $table->string('Address')->nullable();
            $table->Integer('accept')->nullable();
            $table->Integer('class')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studants');
    }
}
