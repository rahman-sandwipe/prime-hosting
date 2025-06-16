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
        Schema::create('seo_configs', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_author')->nullable();
            $table->string('robots')->nullable();
            $table->string('canonical_url')->nullable();
            $table->text('structured_data')->nullable();
            $table->string('google_analytics_id')->nullable();
            $table->string('bing_webmaster_id')->nullable();
            $table->string('yandex_verification_code')->nullable();
            $table->string('google_tag_manager_id')->nullable();
            $table->text('google_tag_manager_no_script')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_configs');
    }
};
