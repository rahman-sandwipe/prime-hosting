<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class RegisterDomainController extends Controller
{
    public function registerDomainPage() : View {
        return view('frontend.pages.domains-register');
    }
}
