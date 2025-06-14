<?php

namespace App\Http\Controllers\User;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function servicePage() {
        return view('user.service');
    }

    public function serviceList() {
        $services = Service::all();
        return response()->json([
            'services' => $services
        ]);
    }
}
