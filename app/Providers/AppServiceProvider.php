<?php

namespace App\Providers;

use App\Models\ContactInfo;
use App\Models\MailSetting;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('site_settings')) {
            $setting = SiteSetting::first();
            if ($setting) {
                Config::set('app.name', $setting->site_name);
                Config::set('app.tagline', $setting->site_tagline);
                Config::set('app.timezone', $setting->default_timezone);
                Config::set('app.locale', $setting->default_language);
                Config::set('app.light_logo', $setting->light_logo);
                Config::set('app.dark_logo', $setting->dark_logo);
                Config::set('app.favicon', $setting->favicon);
            }
        }

        if (Schema::hasTable('seo_configs')) {
            $setting = SiteSetting::first();
            if ($setting) {
                Config::set('app.seo_title', $setting->seo_title);
                Config::set('app.seo_description', $setting->seo_description);
                Config::set('app.seo_keywords', $setting->seo_keywords);
                Config::set('app.seo_author', $setting->seo_author);
                Config::set('app.seo_robots', $setting->seo_robots);
                Config::set('app.seo_canonical_url', $setting->seo_canonical_url);
                Config::set('app.seo_structured_data', $setting->seo_structured_data);
                Config::set('app.google_analytics_id', $setting->google_analytics_id);
                Config::set('app.bing_webmaster_id', $setting->bing_webmaster_id);
                Config::set('app.yandex_verification_code', $setting->yandex_verification_code);
                Config::set('app.google_tag_manager_id', $setting->google_tag_manager_id);
                Config::set('app.google_tag_manager_no_script', $setting->google_tag_manager_no_script);
            }
        }

        if (Schema::hasTable('mail_settings')) {
            $mailSetting = MailSetting::first();
            if ($mailSetting) {
                Config::set('mail.default', 'smtp'); // Ensure smtp is the active mailer
                Config::set('mail.mailers.smtp.host', $mailSetting->host);
                Config::set('mail.mailers.smtp.port', $mailSetting->port);
                Config::set('mail.mailers.smtp.username', $mailSetting->username);
                Config::set('mail.mailers.smtp.password', $mailSetting->password);
                Config::set('mail.mailers.smtp.encryption', $mailSetting->encryption);
                Config::set('mail.mailers.smtp.timeout', $mailSetting->timeout ?? null);
                Config::set('mail.from.address', $mailSetting->from_address);
                Config::set('mail.from.name', $mailSetting->from_name);
            }
        }

        // Set the default contact info if it exists
        if (Schema::hasTable('contact_infos')) {
            $contactInfo = ContactInfo::first();
            if ($contactInfo) {
                Config::set('app.contact_info', [
                    'contact_email' => $contactInfo->contact_email,
                    'support_email' => $contactInfo->support_email,
                    'contact_number' => $contactInfo->contact_phone,
                    'whatsapp_number' => $contactInfo->whatsapp_number,
                    'address' => $contactInfo->address,
                    'google_map' => $contactInfo->map_iframe,
                ]);
            }
        }
    }
}
