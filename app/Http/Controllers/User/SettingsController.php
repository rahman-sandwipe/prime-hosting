<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\PeymentGeteway;
use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use App\Models\SiteSetting;
use App\Models\SocialLink;

class SettingsController extends Controller
{
    /**
     * Get contact information (used in frontend)
     * Returns the first contact record
     */
    public function contactInfosPage()
    {
        $data['contacts'] = ContactInfo::first(); // Get first contact info (optional: latest record)
        return response()->json([
            'contacts' => $data['contacts'] // Used in JS: response.contacts
        ]);
    }

    /**
     * Get site settings (e.g. site name, tagline, logo paths, timezone etc.)
     */
    public function settingsPage()
    {
        $data['settings'] = SiteSetting::first(); // Get the current site settings
        return response()->json([
            'settings' => $data['settings'] // Used in JS: response.settings
        ]);
    }

    /**
     * Get social media links (Facebook, Twitter, Instagram, etc.)
     */
    public function socialLinksPage()
    {
        $data['social_links'] = SocialLink::firstOrNew(); // Returns existing or empty model if not found
        return response()->json([
            'social_links' => $data['social_links'] // Used in JS: response.social_links
        ]);
    }

    /**
     * Get all available payment gateways (e.g. Bkash, Nagad, Stripe, etc.)
     */
    public function peymentGetewaysPage()
    {
        $data['geteways'] = PeymentGeteway::all(); // Get all payment gateway records
        return response()->json([
            'status' => true,
            'message' => 'Payment gateways retrieved successfully',
            'gateways' => $data['geteways'] // Used in JS: response.gateways
        ]);
    }
}
