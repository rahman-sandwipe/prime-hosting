<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ResellerDomainController extends Controller
{
    public function resellerDomainPage() : View {
        return view('frontend.pages.domain-reseller');
    }
}
