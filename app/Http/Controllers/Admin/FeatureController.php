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
        $features = Feature::all();
        return response()->json($features);
    }    // featureList

    // featureInsert
    public function featureInsert(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:features,name',
            'description' => 'nullable|string|max:1000',
            'is_active' => 'boolean',
            'icon' => 'nullable|string|max:255',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen =  time().'.'.$request->file('image')->getClientOriginalExtension();
            $image = $manager->read($request->file('image'));
            $image = $image->resize(200, 200);
            $image->save(base_path('public/images/partials/feature_' . $name_gen));
            $save_url = '/images/partials/feature_' . $name_gen;
            $data['icon'] = $save_url;
        }
        Feature::create($data);
    }
    
    public function featureDetails(Feature $feature)
    {
        return response()->json($feature);
    }    // featureDetails

    public function featureModify(Feature $feature)
    {
        return response()->json($feature);
    }    // featureModify

    public function featureUpdate(Request $request, Feature $feature)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:features,name,' . $feature->id,
            'description' => 'nullable|string|max:1000',
            'is_active' => 'boolean',
            'icon' => 'nullable|string|max:255',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen =  time().'.'.$request->file('image')->getClientOriginalExtension();
            $image = $manager->read($request->file('image'));
            $image = $image->resize(200, 200);
            $image->save(base_path('public/images/partials/feature_' . $name_gen));
            $save_url = '/images/partials/feature_' . $name_gen;
            $data['icon'] = $save_url;
        }
        $feature->update($data);
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
