<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassDiscTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_disc', function (Blueprint $table) {
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('id')
                ->on('classification')->onDelete('cascade');
            $table->unsignedBigInteger('disc_id');
            $table->foreign('disc_id')->references('id')
                ->on('disciplines')->onDelete('cascade');
            $table->string("value");
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
        Schema::dropIfExists('class_disc');
    }
}
