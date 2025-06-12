<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\HostingPackage;
use App\Http\Controllers\Controller;

class HostingPackageController extends Controller
{
    public function HostingPage() : View {
        return view('backend.pages.hostingPage');
    }


    /** packageList */
    public function packageList()
    {
        $packages = HostingPackage::with('attribute')->get();
        return response()->json([
            'packages' => $packages
        ], 200);
    }

    /** packageInsert */
    public function packageInsert(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price_monthly' => 'required|numeric',
            'price_yearly' => 'required|numeric',
            'disk_space' => 'required|string',
            'bandwidth' => 'required|string',
            'addon_domains' => 'required|integer',
            'email_accounts' => 'required|integer',
            'support_type' => 'nullable|string',
            'attribute_id' => 'nullable|exists:attributes,id',
            'status' => 'required|in:active,inactive',
        ]);
        $data['slug'] = Str::slug($data['name'], '-'.$data['attribute_id']);
        $hostingPackage = HostingPackage::create($data);
        return response()->json([
            'message' => 'Hosting package created successfully!',
            'package' => $hostingPackage
        ], 200);
    }

    /** packageDetails */
    public function packageDetails(HostingPackage $hostingPackage)
    {
        $package = $hostingPackage->load('attribute');
        return response()->json([
            'package' => $package
        ], 200);
    }

    /** packageModify */
    public function packageModify(HostingPackage $hostingPackage)
    {
        $ePackage = $hostingPackage->load('attribute');
        return response()->json([
            'ePackage' => $ePackage
        ], 200);
    }

    /** packageUpdate */
    public function packageUpdate (Request $request, HostingPackage $hostingPackage)
    {
        $data = $request->validate([
            'description' => 'nullable|string',
            'price_monthly' => 'required|numeric',
            'price_yearly' => 'required|numeric',
            'disk_space' => 'required|string',
            'bandwidth' => 'required|string',
            'addon_domains' => 'required|integer',
            'email_accounts' => 'required|integer',
            'support_type' => 'nullable|string',
            'attribute_id' => 'nullable|exists:attributes,id',
            'status' => 'required|in:active,inactive',
        ]);
        $hostingPackage->update($data);
        return response()->json([
            'message' => 'Hosting package updated successfully!',
            'package' => $hostingPackage
        ], 200);
    }

    /** packageDelete */
    public function packageDelete(HostingPackage $hostingPackage)
    {
        $hostingPackage->delete();
        return response()->json([
            'message' => 'Hosting package deleted successfully!'
        ], 200);
    }
}
