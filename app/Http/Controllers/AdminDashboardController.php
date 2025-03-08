<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    public function dashboard() : View {
        return view('backend.pages.dashboard');
    }
}
