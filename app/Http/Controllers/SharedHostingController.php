<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SharedHostingController extends Controller
{
    public function sharedHostingPage() : View{
        return view('frontent.pages.shared-hosting');
    }
}
