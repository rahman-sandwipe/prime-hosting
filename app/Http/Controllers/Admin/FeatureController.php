<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class FeatureController extends Controller
{
    public function FeaturesPage()
    {
        return view('backend.pages.featurePage');
    }   // FeaturesPage

    public function featureList()
    {
        return response()->json([
            'features' => Feature::all()
        ]);
    }    // featureList

    // featureInsert
    public function featureInsert(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:features,name',
            'description' => 'nullable|string|max:1000',
            'status' => 'nullable|in:active,inactive',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048', // <-- এখানে image file validation
        ]);

        $data = $request->all();
        if ($request->hasFile('icon')) {
            $manager = new ImageManager(new Driver());
            $name_gen =  time().'.'.$request->file('icon')->getClientOriginalExtension();
            $icon = $manager->read($request->file('icon'));
            $icon = $icon->resize(200, 200);
            $icon->save(public_path('images/partials/feature_' . $name_gen));    // Save the image in public path
            $save_url = '/images/partials/feature_' . $name_gen; // Save the image URL
            $data['icon'] = $save_url;   // Assign the URL to the icon field
        }
        Feature::create($data);
        return response()->json([
            'message' => 'Feature inserted successfully!'
        ], 200);
    }
    
    public function featureDetails(Feature $feature)
    {
        return response()->json([
            'feature' => $feature
        ], 200);
    }    // featureDetails

    public function featureModify(Feature $feature)
    {
        return response()->json([
            'feature' => $feature
        ], 200);
    }    // featureModify

    public function featureUpdate(Request $request, Feature $feature)
    {
        $data = $request->all();    // Get all request data
        if ($request->hasFile('icon')) {
            $manager = new ImageManager(new Driver());
            $name_gen =  time().'.'.$request->file('icon')->getClientOriginalExtension();
            $icon = $manager->read($request->file('icon'));
            $icon = $icon->resize(200, 200);
            $icon->save(public_path('images/partials/feature_' . $name_gen));    // Save the image in public path
            $save_url = '/images/partials/feature_' . $name_gen; // Save the image URL
            $data['icon'] = $save_url;   // Assign the URL to the icon field
        }       // Check if the icon file is present in the request
        $feature->update($data);
        return response()->json([
            'data' => $data,
            'message' => 'Feature updated successfully!'
        ]);
    }    // featureUpdate
    
    public function featureDelete(Feature $feature)
    {
        if (file_exists(public_path($feature->icon))) {
            unlink(public_path($feature->icon));
        }
        $feature->delete();
        return response()->json([
            'message' => 'Feature deleted successfully!'
        ], 200);
    }    // featureDelete
}
