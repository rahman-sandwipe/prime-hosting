<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TransferDomainController extends Controller
{
    public function transferDomainPage() : View {
        return view('frontend.pages.domain-transfer');
    }
}
