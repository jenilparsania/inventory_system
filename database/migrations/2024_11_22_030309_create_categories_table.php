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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category',50)->unique();
            $table->timestamps();
            //$table->softDeletes();
            // video 2 : 29:08
            // video 2 : 33:00  (linking company and series)
            $table->softDeletes();
            // it was softDelete 
            //than of the softDelete 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
