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
        Schema::create('peyment_geteways', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique(); // Is Like ['paypal', 'stripe', 'razorpay', etc.]
            $table->string('api_key', 255)->nullable(); // API Key for the payment gateway
            $table->string('api_secret', 255)->nullable(); // API Secret for the payment gateway
            $table->string('currency_code', 10)->default('USD'); // Default currency code
            $table->string('currency_symbol', 10)->default('$'); // Default currency symbol
            $table->string('logo', 255)->nullable(); // Logo URL or path
            $table->enum('status', ['1', '0'])->default('1'); // Is the payment gateway active?
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peyment_geteways');
    }
};
