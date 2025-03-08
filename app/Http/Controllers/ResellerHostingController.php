<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ResellerHostingController extends Controller
{
    public function resellerHostingPage() : View {
        return view('frontent.pages.reseller-hosting');
    }
}