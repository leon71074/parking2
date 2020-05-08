<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatParkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parks', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('parkName',200);
            $table->string('parkAddr',50)->nullable();
            $table->string('parkTel',50)->nullable();
            $table->integer('parkPrice')->default(0)->nullable()->unsigned();
            $table->integer('parkNum')->unique();
            $table->string('parkPic',255)->nullable();
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
        Schema::dropIfExists('parks');
    }
}
