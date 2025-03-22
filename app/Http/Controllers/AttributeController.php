<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    // 
    public function AttributesPage()
    {
        return view('backend.pages.attribute.attributes');
    }
    public function insertAttributePage()
    {
        return view('backend.pages.attribute.insertAttribute');
    }


    // API
    public function getAttributes()
    {
        $attributes = Attribute::all();
        return response()->json($attributes, 200);
    }

    public function storeAttribute(Request $request) {
        // Validation
        $request->validate([
            'attribute_name' => 'required|string|max:255',
            'attribute_slug' => 'required|string|max:255',
        ]);

        // Insert Data
        Attribute::create([
            'attribute_name' => $request->attribute_name,
            'attribute_slug' => $request->attribute_slug,
        ]);

        return response()->json(['message' => 'Attribute saved successfully!'], 201);
    }
    public function modifyAttribute(Request $request)
    {
        $attributeID = $request->input('attributeID');
        $authID = $request->header('attributeID');
        $attribute = Attribute::where('attributeID', $attributeID)->where('authID', $authID)->first();
        if (!$attribute) {
            return response()->json([
                'success' => false,
                'message' => 'Attribute not found.'
            ], 404);
        }else {
            return response([
                'success' => true,
                'attribute' => $attribute
            ]);
        }
    }
}
