<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function FeaturesPage()
    {
        return view('backend.pages.featurePage');
    }
}
