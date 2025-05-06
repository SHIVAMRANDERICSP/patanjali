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
            $table->id();
            $table->foreignId('product_category_id')
                ->constrained('product_categories')
                ->onDelete('cascade');
            $table->longText('title');
            $table->longText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->longText('image')->nullable();
            $table->longText('price')->nullable();
            $table->longText('discount_price')->nullable();
            $table->longText('sort_order')->nullable();
            $table->integer('status')->default(0);
            $table->longText('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_slug')->nullable();
            $table->timestamps();
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
