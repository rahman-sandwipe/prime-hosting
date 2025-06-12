<?php

namespace App\Http\Controllers\Admin;

use App\Models\Attribute;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttributeController extends Controller
{
    // Backend Pages
    public function AttributesPage()
    {
        return view('backend.pages.attributePage');
    }

    // attributeList
    public function attributeList(){
        $attributes = Attribute::all();
        return response()->json([
            'attributes' => $attributes
        ], 200);
    }

    // attributeInsert
    public function attributeInsert(Request $request){
        $validatedData = $request->validate([
            'attribute_name' => 'required|string|unique:attributes|max:255',
        ]);

        $attribute = new Attribute;
        $attribute->attribute_name = $request->attribute_name;
        $attribute->attribute_slug = Str::slug($request->attribute_name);
        $attribute->save();
        return response()->json([
            'message' => 'Attribute inserted successfully!',
            'attribute' => $attribute
        ], 200);
    }

    // attributeDetails
    public function attributeDetails(Attribute $attribute){
        return response()->json($attribute, 200);
    }
    
    // attributeModify
    public function attributeModify(Attribute $attribute){
        return response()->json($attribute, 200);
    }

    // attributeUpdate
    public function attributeUpdate(Request $request, Attribute $attribute)
    {
        // Validate input
        $data = $request->validate([
            'attribute_name' => 'required|string|max:255',
        ]);

        // Check if the attribute name has changed
        if ($data['attribute_name'] !== $attribute->attribute_name) {
            $baseSlug = Str::slug($data['attribute_name']);
            $slug = $baseSlug;
            $count = 1;

            // Ensure unique slug
            while (Attribute::where('attribute_slug', $slug)
                ->where('id', '!=', $attribute->id)
                ->exists()) {
                $slug = $baseSlug . '-' . $count++;
            }

            // Assign new name and slug
            $attribute->attribute_name = $data['attribute_name'];
            $attribute->attribute_slug = $slug;
        }

        // Save updates
        $attribute->save();

        // Return success response with updated data
        return response()->json([
            'message' => 'Attribute updated successfully!',
            'attribute' => $attribute
        ], 200);
    }

    // attributeDelete
    public function attributeDelete(Attribute $attribute){
        $attribute->delete();
        return response()->json([
            'message' => 'Attribute deleted successfully!'
        ], 200);
    }
}
