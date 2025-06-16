<?php

namespace App\Http\Controllers\User;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\HeroSection;
use App\Models\SupportSection;

class HomeController extends Controller
{
    public function homePage() : View {
        return view('frontend.pages.homePage');
    }

    public function heroSection() {
        $heroData = HeroSection::first();
        return response()->json([
            'heroData' => $heroData
        ]);
    }    // heroSection
    public function aboutSection() {
        $aboutData = AboutSection::first();
        return response()->json([
            'aboutData' => $aboutData
        ]);
    }    // aboutSection
    public function supportSection() {
        $supportData = SupportSection::first();
        return response()->json([
            'supportData' => $supportData
        ]);
    }    // supportSection
}
