<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function blogPage() : View {
        return view('frontend.pages.blogs');
    }
}
