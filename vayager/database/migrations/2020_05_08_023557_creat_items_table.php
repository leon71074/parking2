<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 191);
            $table->integer('price')->default(0)->nullble()->unsigned;
            $table->string('size', 50)->nullable();
            $table->boolean('enabled')->default(true);
            $table->string('pic', 191)->nullable();
            $table->timestamps();
            $table->timestamp('sell_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
