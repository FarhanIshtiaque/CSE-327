<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('details_id')->unsigned();

            $table->string('title');
            $table->string('model');
            $table->string('brand');
            $table->string('details');
            $table->string('size');
            $table->string('color');
            $table->string('others')->nullable();
            $table->double('original_price')->default(0);
            $table->double('selling_price')->default(0);
            $table->integer('quantity')->default(0);
            $table->double('discount')->default(0);
            $table->double('shipping_cost')->default(0);
            $table->string('thumbnail');
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
        Schema::dropIfExists('order_items');
    }
}
