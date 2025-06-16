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
        Schema::create('social_links', function (Blueprint $table) {
            $table->id();
            $table->string('facebook_url', 100)->default('https://www.facebook.com/yourpage');
            $table->string('twitter_url', 100)->default('https://www.twitter.com/yourprofile');
            $table->string('instagram_url', 100)->default('https://www.instagram.com/yourprofile');
            $table->string('linkedin_url', 100)->default('https://www.linkedin.com/in/yourprofile');
            $table->string('youtube_url', 100)->default('https://www.youtube.com/yourchannel');
            $table->string('github_url', 100)->default('https://www.github.com/yourprofile');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_links');
    }
};
