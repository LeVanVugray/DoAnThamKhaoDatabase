<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id('order_item_id');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('size_id')->nullable();
            $table->unsignedBigInteger('color_id')->nullable();
            $table->integer('quantity');
            $table->decimal('unit_price', 10, 2);
        });
        // Khóa ngoại
        $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('set null');
        $table->foreign('product_id')->references('product_id')->on('products')->onDelete('set null');
        $table->foreign('size_id')->references('size_id')->on('sizes')->onDelete('set null');
        $table->foreign('color_id')->references('color_id')->on('colors')->onDelete('set null');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_items');
    }
};
