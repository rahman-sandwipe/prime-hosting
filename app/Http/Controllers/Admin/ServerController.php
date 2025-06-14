<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    public function ServersPage()
    {
        return view('backend.pages.serverPage');
    }
}
