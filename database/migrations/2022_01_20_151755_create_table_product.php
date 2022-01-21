<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('product', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('title', 200);
        //     $table->string('feature', 200)->nullable();
        //     $table->decimal('price', 8, 2);
        //     $table->boolean('istop')->nullable();
        //     $table->tinyInteger('discount')->nullable();
        //     $table->integer('amount');
        //     $table->integer('commoditycode')->unique();
        //     $table->string('image', 200)->nullable();
        //     $table->unsignedBigInteger('manufacturerid');
        //     $table->foreign('manufacturerid')->references('id')->on('manufacturer')->cascadeOnDelete();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('product');
    }
}