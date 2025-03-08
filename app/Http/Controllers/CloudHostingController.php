<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CloudHostingController extends Controller
{
    public function cloudHostingPage() : View {
        return view('frontent.pages.cloud-hosting');
    }
}
