<?php

namespace App\Http\Controllers\Admin;

use App\Models\SeoConfig;
use App\Models\SocialLink;
use App\Models\ContactInfo;
use App\Models\MailSetting;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Models\PeymentGeteway;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SettingController extends Controller
{
    /**
     * Show the requested settings page based on query string
     */
    public function settingsPage(Request $request)
    {
        // Show Site Settings Page
        if ($request->has('site-settings')) {
            $data['settings'] = SiteSetting::firstOrNew([]);
            return view('backend.pages.settings.settingsPage', $data);
        }

        // Show Contact Information Page
        elseif ($request->has('contact-infos')) {
            $data['contact'] = ContactInfo::firstOrNew([]);
            return view('backend.pages.settings.contactInfosPage', $data);
        }

        // Show Social Links Page
        elseif ($request->has('social-links')) {
            $data['social'] = SocialLink::firstOrNew();
            return view('backend.pages.settings.socialLinksPage', $data);
        }

        // Show Mail Configurations Page
        elseif ($request->has('mail-settings')) {
            $data['mail'] = MailSetting::firstOrNew([]);
            return view('backend.pages.settings.mailSettingsPage', $data);
        }

        // Show SEO Settings Page
        elseif ($request->has('seo-settings')) {
            $data['seo'] = SeoConfig::firstOrNew([]);
            return view('backend.pages.settings.seoSettingsPage', $data);
        }

        // Show Payment Gateway Settings Page
        elseif ($request->has('payment-gateways')) {
            $data['geteways'] = PeymentGeteway::all();
            return view('backend.pages.settings.peymentGetewaysPage', $data);
        }

        // If no valid query parameter found, show 404
        else {
            abort(404, 'Page not found');
        }
    }

    /**
     * Handle settings form submissions and update logic
     */
    public function settingsUpdate(Request $request)
    {
        // Site Settings Update
        if ($request->has('site-settings')) {
            $settings = SiteSetting::firstOrNew([]);
            $settings->fill($request->only([
                'site_name',
                'site_tagline',
                'default_language',
                'default_timezone'
            ]));

            $manager = new ImageManager(new Driver());

            // Upload Light Logo
            if ($request->hasFile('light_logo')) {
                if (!empty($settings->light_logo) && file_exists(public_path($settings->light_logo))) {
                    unlink(public_path($settings->light_logo));
                }
                $file = $request->file('light_logo');
                $name = 'light_logo_' . time() . '.' . $file->getClientOriginalExtension();
                $path = '/images/partials/' . $name;
                $image = $manager->read($file)->resize(200, 70, function ($c) {
                    $c->aspectRatio();
                });
                $image->save(public_path($path));
                $settings->light_logo = $path;
            }

            // Upload Dark Logo
            if ($request->hasFile('dark_logo')) {
                if (!empty($settings->dark_logo) && file_exists(public_path($settings->dark_logo))) {
                    unlink(public_path($settings->dark_logo));
                }
                $file = $request->file('dark_logo');
                $name = 'dark_logo_' . time() . '.' . $file->getClientOriginalExtension();
                $path = '/images/partials/' . $name;
                $image = $manager->read($file)->resize(200, 70, function ($c) {
                    $c->aspectRatio();
                });
                $image->save(public_path($path));
                $settings->dark_logo = $path;
            }

            // Upload Favicon
            if ($request->hasFile('favicon')) {
                if (!empty($settings->favicon) && file_exists(public_path($settings->favicon))) {
                    unlink(public_path($settings->favicon));
                }
                $file = $request->file('favicon');
                $name = 'favicon_' . time() . '.' . $file->getClientOriginalExtension();
                $path = '/images/partials/' . $name;
                $image = $manager->read($file)->resize(62, 62, function ($c) {
                    $c->aspectRatio();
                });
                $image->save(public_path($path));
                $settings->favicon = $path;
            }

            $settings->save();
            return back()->with('success', 'Site settings updated successfully.');
        }

        // Contact Info Update
        elseif ($request->has('contact-infos')) {
            $contact = ContactInfo::firstOrNew([]);
            $contact->fill($request->only([
                'contact_email',
                'support_email',
                'contact_phone',
                'whatsapp_number',
                'address',
                'map_iframe'
            ]));
            $contact->save();
            $msg = ['success' => 'Contact information updated successfully.'];
        }

        // Social Links Update
        elseif ($request->has('social-links')) {
            $social = SocialLink::firstOrNew([]);
            $social->fill($request->only([
                'facebook_url',
                'twitter_url',
                'instagram_url',
                'linkedin_url',
                'youtube_url',
                'github_url'
            ]));
            $social->save();
            $msg = ['success' => 'Social links updated successfully.'];
        }

        // Mail Settings Update
        elseif ($request->has('mail-settings')) {
            $validated = $request->validate([
                'mailer'        => 'required|string',
                'host'          => 'required|string',
                'port'          => 'required|numeric',
                'username'      => 'required|string',
                'password'      => 'required|string',
                'encryption'    => 'nullable|string',
                'from_address'  => 'required|email',
                'from_name'     => 'required|string',
            ]);

            $mailSetting = MailSetting::firstOrNew([]);
            $mailSetting->fill($validated);
            $mailSetting->save();
            $msg = ['success' => 'Mail settings updated successfully.'];
        }

        // SEO Settings Update
        elseif ($request->has('seo-settings')) {
            $seo = SeoConfig::firstOrNew([]);
            $seo->fill($request->only([
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
            ]));
            $seo->save();
            $msg = ['success' => 'SEO updated successfully.'];
        }

        // Payment Gateway Create
        elseif ($request->has('payment-gateways')) {
            $getWay = new PeymentGeteway();
            $getWay->fill($request->only(['name']));

            // Upload Payment Gateway Logo
            if ($request->hasFile('logo')) {
                $manager = new ImageManager(new Driver());
                $name_gen = $request->name . '_' . time() . '.' . $request->file('logo')->getClientOriginalExtension();
                $image = $manager->read($request->file('logo'));
                $image = $image->resize(200, 100, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $image->save(public_path('images/partials/' . $name_gen));
                $getWay->logo = '/images/partials/' . $name_gen;
            }

            $getWay->save();
            $msg = ['success' => 'Payment gateway created successfully.'];
        }

        // Invalid Request
        else {
            return redirect()->back()->withErrors(['error' => 'Invalid settings update request.']);
        }

        return redirect()->back()->with($msg);
    }
}
