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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('image_secondary')->nullable(); // Hình ảnh phụ
            $table->decimal('price', 10, 2);
            $table->decimal('old_price', 10, 2)->nullable();
            $table->text('description')->nullable();
            $table->string('sale')->nullable()->default(0);
            $table->unsignedInteger('category_id');
            // $table->integer('stock')->nullable()->default(0);
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on(table: 'categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
