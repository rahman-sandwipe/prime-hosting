<?php

namespace App\Http\Controllers\User;

use App\Models\Attribute;
use App\Models\HostingPackage;
use App\Http\Controllers\Controller;

class AttributeController extends Controller
{
    public function hostingPage(Attribute $attribute){
        $packages = HostingPackage::where('attribute_id', $attribute->id)->get();
        return view('frontend.pages.hostingPage', [
            'attribute' => $attribute,
            'packages' => $packages,
        ]);
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
