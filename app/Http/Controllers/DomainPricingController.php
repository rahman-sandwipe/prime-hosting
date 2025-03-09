<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DomainPricingController extends Controller
{
    public function domainPricingPage() : View {
        return view('frontend.pages.domain-pricing');
    }
}
