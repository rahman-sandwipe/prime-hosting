<?php

namespace App\Http\Controllers\User;

use App\Models\Attribute;
use Illuminate\View\View;
use App\Models\HostingPackage;
use App\Http\Controllers\Controller;

class AttributeController extends Controller
{
    public function hostingPage() : View {
        return view('frontend.pages.hostingPage');
    }

    public function attributeList() {
        $attributes = Attribute::all();
        return response()->json([
            'attributes' => $attributes
        ], 200);
    }

    public function attributeDetails(Attribute $attribute) {
        return response()->json([
            'attribute' => $attribute
        ], 200);
    }

    public function getPackage(Attribute $attribute) {
        $packages = HostingPackage::where('attribute_id', $attribute->id)->get();
        return response()->json([
            'packages' => $packages
        ], 200);
    }
}
