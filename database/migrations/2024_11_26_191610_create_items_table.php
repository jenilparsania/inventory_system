<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * category(id from categories), title, description, 
     * price, quantity, sku, and picture.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->string('title',100);
            $table->text('description');
            $table->decimal('price',8,2);
            $table->integer('quantity');
            $table->string('sku')->unique();
            $table->string('picture')->nullable();

            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
