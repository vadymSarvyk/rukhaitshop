<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('manufacturers', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('title', 200);
            $table->timestamps();
        });
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->string('feature', 200)->nullable();
            $table->decimal('price', 8, 2);
            $table->boolean('istop')->nullable();
            $table->tinyInteger('discount')->nullable();
            $table->integer('amount');
            $table->integer('commoditycode')->unique();
            $table->string('image', 200)->nullable();
            $table->unsignedInteger('manufacturerid');
            $table->foreign('manufacturerid')->references('id')->on('manufacturers')->cascadeOnDelete();
            $table->timestamps();
        });
        // Schema::create('characteristic', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('description', 1000);
        //     $table->timestamps();
        // });
        // Schema::create('category', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('title', 100);
        //     $table->string('image', 200)->nullable();
        //     $table->integer('categorylevel');
        //     $table->unsignedBigInteger('parentcategoryid');
        //     $table->foreign('parentcategoryid')->references('id')->on('category')->onUpdate('cascade')->onDelete('cascade');
        //     $table->timestamps();
        // });
        // Schema::create('categoryproducts', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->unsignedBigInteger('categoryid');
        //     $table->unsignedBigInteger('productid');
        //     $table->foreign('categoryid')->references('id')->on('category')->onUpdate('cascade')->onDelete('cascade');
        //     $table->foreign('productid')->references('id')->on('product')->onUpdate('cascade')->onDelete('cascade');
        //     $table->timestamps();
        // });
        // Schema::create('usershop', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name', 100);
        //     $table->string('surname', 100);
        //     $table->string('lastname', 100);
        //     $table->date('dateofbirth', 200)->nullable();
        //     $table->string('username', 100)->unique();
        //     $table->string('email', 100)->unique();
        //     $table->string('password', 200)->unique();
        //     $table->timestamps();
        // });
        // Schema::create('comments', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('comments', 500);
        //     $table->tinyInteger('rating');
        //     $table->boolean('ismoderated')->nullable();
        //     $table->dateTime('date');
        //     $table->unsignedBigInteger('userid');
        //     $table->unsignedBigInteger('productid');
        //     $table->foreign('userid')->references('id')->on('user')->onUpdate('cascade')->onDelete('cascade');
        //     $table->foreign('productid')->references('id')->on('product')->onUpdate('cascade')->onDelete('cascade');
        //     $table->timestamps();
        // });
        // Schema::create('order', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('orderstate', 50);
        //     $table->integer('ordernumber');
        //     $table->decimal('totalprice', 8, 2);
        //     $table->dateTime('dateoforder');
        //     $table->unsignedBigInteger('userid');
        //     $table->foreign('userid')->references('id')->on('user')->onUpdate('cascade')->onDelete('cascade');
        //     $table->timestamps();
        // });
        // Schema::create('orderproducts', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('quantity');
        //     $table->decimal('priceofoneproduct', 8, 2);
        //     $table->unsignedBigInteger('orderid');
        //     $table->unsignedBigInteger('productid');
        //     $table->foreign('orderid')->references('id')->on('order')->onUpdate('cascade')->onDelete('cascade');
        //     $table->foreign('productid')->references('id')->on('product')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('products');
        Schema::dropIfExists('manufacturers');

        // Schema::dropIfExists('characteristic');
        // Schema::dropIfExists('category');
        // Schema::dropIfExists('categoryproducts');
        // Schema::dropIfExists('usershop');
        // Schema::dropIfExists('comments');
        // Schema::dropIfExists('order');
        // Schema::dropIfExists('orderproducts');
    }
}