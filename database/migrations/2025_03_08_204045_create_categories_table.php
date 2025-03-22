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
            $table->id('categoryID')->primary();
            $table->string('category_name')->unique();
            $table->string('category_slug')->unique();

            $table->unsignedBigInteger('attributeID');
            $table->foreign('attributeID')->references('attributeID')->on('hosting_attributes')
            ->restrictOnDelete()->restrictOnUpdate();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hosting_categories');
    }
};
