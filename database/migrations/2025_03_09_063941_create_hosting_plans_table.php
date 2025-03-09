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
            $table->id('plan_id');
            $table->string('plan_name')->unique();
            $table->enum('plane_category', ['Cloud Hosting','Shared Hosting','Reseller Hosting'])->nullable();
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->string('disk_space');
            $table->string('bandwidth');
            $table->integer('domains_allowed');
            $table->integer('subdomains_allowed');
            $table->integer('email_accounts');
            $table->integer('ftp_accounts');
            $table->integer('database_limit');
            $table->boolean('ssl_certificate')->default(false);
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
