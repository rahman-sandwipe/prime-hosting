<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function homePage() : View {
        return view('frontent.pages.home');
    }
}
