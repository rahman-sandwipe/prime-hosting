<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoConfig extends Model
{
    protected $table = 'seo_configs';

    protected $fillable = [
        'meta_title',
        'meta_description',
        'meta_keywords',
        'meta_author',
        'robots',
        'canonical_url',
        'structured_data',
        'google_analytics_id',
        'bing_webmaster_id',
        'yandex_verification_code',
        'google_tag_manager_id',
        'google_tag_manager_no_script'
    ];

    public $timestamps = false;
}
