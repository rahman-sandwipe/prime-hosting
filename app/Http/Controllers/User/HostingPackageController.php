<?php

namespace App\Http\Controllers\User;

use App\Models\Attribute;
use App\Models\HostingPackage;
use App\Http\Controllers\Controller;

class HostingPackageController extends Controller
{
    public function hostingPackage(Attribute $attribute)
    {
        $packages = HostingPackage::where('attribute_id', $attribute->id)->get();
        return view('frontend.pages.hostingPage', [
            'attribute' => $attribute,
            'packages' => $packages,
        ]);
    }
}
