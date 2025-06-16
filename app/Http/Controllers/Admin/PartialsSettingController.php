<?php

namespace App\Http\Controllers\Admin;

use App\Models\HeroSection;
use App\Models\AboutSection;
use Illuminate\Http\Request;
use App\Models\SupportSection;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PartialsSettingController extends Controller
{
    public function pagesList(Request $request)
    {
        if ($request->has('hero-section')) {
            $data = HeroSection::first();
            return view('backend.pages.herosPage', compact('data'));
        }   // Hero section

        if ($request->has('about-section')) {
            $data = AboutSection::first();
            return view('backend.pages.aboutsPage', compact('data'));
        }   // About section

        if ($request->has('support-section')) {
            $data = SupportSection::first();
            return view('backend.pages.supportsPage', compact('data'));
        }   // Support section

        abort(404);
    }


    public function pagesUpdate(Request $request)
    {
        if ($request->has('hero-section')) {
            $hero = HeroSection::firstOrNew([]);
            $hero->fill($request->only(['title', 'description', 'register_api', 'transfer_api']));
            if ($request->hasFile('image')) {
                // If an image already exists, delete it
                if ($hero->image && file_exists(public_path($hero->image))) {
                    unlink(public_path($hero->image));
                }
                // Process the new image
                $manager = new ImageManager(new Driver());
                $name_gen =  time().'.'.$request->file('image')->getClientOriginalExtension();
                $image = $manager->read($request->file('image'));
                $image->save(public_path('images/partials/hero_' . $name_gen));
                // Set the image path to the model
                $hero->image = '/images/partials/hero_' . $name_gen;
            }
            $hero->save();
            return back()->with('success', 'Hero section updated!');
        }    // Hero section

        if ($request->has('about-section')) {
            $about = AboutSection::firstOrNew([]);
            $about->fill($request->only(['title', 'subtitle', 'description', 'register_users', 'current_hosted']));
            if ($request->hasFile('image1')) {
                // If an image already exists, delete it
                if ($about->image1 && file_exists(public_path($about->image1))) {
                    unlink(public_path($about->image1));
                }
                // Process the new image
                $manager = new ImageManager(new Driver());
                $name_gen =  time().'.'.$request->file('image1')->getClientOriginalExtension();
                $image = $manager->read($request->file('image1'));
                $image->save(public_path('images/partials/about1_' . $name_gen));
                // Set the image path to the model
                $about->image1 = '/images/partials/about1_' . $name_gen;
            }
            if ($request->hasFile('image2')) {
                // If an image already exists, delete it
                if ($about->image2 && file_exists(public_path($about->image2))) {
                    unlink(public_path($about->image2));
                }
                // Process the new image
                $manager = new ImageManager(new Driver());
                $name_gen =  time().'.'.$request->file('image2')->getClientOriginalExtension();
                $image = $manager->read($request->file('image2'));
                $image->save(public_path('images/partials/about2_' . $name_gen));
                // Set the image path to the model
                $about->image2 = '/images/partials/about2_' . $name_gen;
            }
            $about->save();
            return back()->with('success', 'About section updated!');
        }

        if ($request->has('support-section')) {
            $support = SupportSection::firstOrNew([]);
            $support->fill($request->only(['title', 'description', 'phone', 'email', 'live_chat_api', 'contact_form_api']));
            if ($request->hasFile('image')) {
                // If an image already exists, delete it
                if ($support->image && file_exists(public_path($support->image))) {
                    unlink(public_path($support->image));
                }
                // Process the new image
                $manager = new ImageManager(new Driver());
                $name_gen =  time().'.'.$request->file('image')->getClientOriginalExtension();
                $image = $manager->read($request->file('image'));
                $image->save(public_path('images/partials/support_' . $name_gen));
                // Set the image path to the model
                $support->image = '/images/partials/support_' . $name_gen;
            }
            // Save the support section
            $support->save();
            return back()->with([
                'success' => 'Support section updated!'
            ]);
        }

        return back()->with('error', 'Invalid section!');
    }
}
