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
        Schema::create('contact_infos', function (Blueprint $table) {
            $table->id();
            $table->string('contact_email', 50)->default('contact@domain.com');
            $table->string('support_email', 50)->default('support@domain.com');
            $table->string('contact_phone', 15)->default('+1234567890');
            $table->string('whatsapp_number', 15)->default('+1234567890');
            $table->string('address', 455)->default('123 Main St, City, Country');
            $table->string('map_iframe', 1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_infos');
    }
};
