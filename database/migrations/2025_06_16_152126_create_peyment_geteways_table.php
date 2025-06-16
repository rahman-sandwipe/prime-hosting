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
            $table->string('logo', 255)->nullable(); // Logo URL or path
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
