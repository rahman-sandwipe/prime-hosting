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
            $table->string('meta_title', 100)->nullable();
            $table->string('meta_description', 1000)->nullable();
            $table->string('meta_keywords', 1000)->nullable();
            $table->string('meta_author', 100)->nullable();
            $table->string('robots', 50)->nullable();
            $table->string('canonical_url', 1000)->nullable();
            $table->string('twitter_card', 1000)->nullable();
            $table->string('structured_data', 1000)->nullable();
            $table->string('google_analytics_id', 255)->nullable();
            $table->string('bing_webmaster_id', 255)->nullable();
            $table->string('yandex_verification_code', 255)->nullable();
            $table->string('facebook_pixel_id', 1000)->nullable();
            $table->string('google_tag_manager_id', 1000)->nullable();
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
