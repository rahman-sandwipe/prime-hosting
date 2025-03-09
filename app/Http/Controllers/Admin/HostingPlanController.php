<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use App\Models\HostingPlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HostingPlanController extends Controller
{
    public function HostingPlaneList() : View {
        return view('backend.pages.hosting-plane-list');
    }

    public function HostingPlaneFrom() : View {
        return view('backend.pages.hosting-plane-from');
    }
    public function HostingPlaneStore(Request $request) {
        $request->validate([
            'plan_name' => 'required|unique:hosting_plans',
            'plane_category' => 'required|in:Cloud Hosting,Shared Hosting,Reseller Hosting',
            'description' => 'required',
            'price' => 'required|numeric',
            'disk_space' => 'required',
            'bandwidth' => 'required',
            'domains_allowed' => 'required|integer',
            'subdomains_allowed' => 'required|integer',
            'email_accounts' => 'required|integer',
            'ftp_accounts' => 'required|integer',
            'database_limit' => 'required|integer',
            'ssl_certificate' => 'required|boolean',
        ]);

        HostingPlan::create($request->all());
        return redirect()->route('HostingPlaneList')->with('success', 'Hosting plan created successfully.');
    }
}
