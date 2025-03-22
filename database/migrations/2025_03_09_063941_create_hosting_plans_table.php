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
        Schema::create('hosting_plans', function (Blueprint $table) {
            $table->id('planID');
            $table->string('plan_name')->unique();
            $table->string('plan_slug')->unique();
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->string('disk_space');
            $table->string('bandwidth');
            $table->integer('domains_allowed');
            $table->integer('subdomains_allowed');
            $table->integer('email_accounts');
            $table->integer('ftp_accounts');
            $table->integer('database_limit');
            $table->boolean('ssl_certificate')->default(false);
            $table->string('btnLink');
            
            $table->unsignedBigInteger('categoryID')->notNullable();
            $table->unsignedBigInteger('userID')->notNullable();
            $table->unsignedBigInteger('attributes')->nullable();

            $table->foreign('categoryID')->references('categoryID')->on('hosting_categories')
            ->restrictOnDelete()->restrictOnUpdate();
            $table->foreign('userID')->references('authID')->on('users')
            ->restrictOnDelete()->restrictOnUpdate();
            $table->foreign('attributes')->references('attributeID')->on('hosting_attributes')
            ->restrictOnDelete()->restrictOnUpdate();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hosting_plans');
    }
};
