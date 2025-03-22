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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id('blogID');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->string('image')->nullable();
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->string('views')->default(0);
            $table->string('comments')->default(0);
            $table->string('likes')->default(0);
            $table->string('dislikes')->default(0);
            
            $table->string('tags');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_keywords');

            $table->unsignedBigInteger('authorID');
            $table->unsignedBigInteger('categoryID');
            $table->foreign('authorID')->references('authID')->on('users')
            ->restrictOnDelete()->restrictOnUpdate();
            $table->foreign('categoryID')->references('categoryID')->on('hosting_categories')
            ->restrictOnDelete()->restrictOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
