<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function contactPage() : View {
        return view('frontent.pages.contact');
    }
}
