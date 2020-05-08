<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatParkjpgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkJpgs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('parkNum');
            $table->string('parkJpg1');
            $table->string('parkJpg2');
            $table->string('parkJpg3');
            $table->string('parkJpg4');
            $table->string('parkJpg5');
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
        Schema::dropIfExists('parkJpgs');
    }
}
