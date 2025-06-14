<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ServiceController extends Controller
{
    // ServicesPage
    public function ServicesPage(){
        return view('backend.pages.servicePage');
    }

    // serviceList
    public function serviceList(){
        $services = Service::all();
        return response()->json([
            'services' => $services,
            'status' => 200
        ]);
    }

    // serviceInsert
    public function serviceInsert(Request $request){
        $data = $request->all();
        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen =  time().'.'.$request->file('image')->getClientOriginalExtension();
            $image = $manager->read($request->file('image'));
            $image = $image->resize(200, 200);
            $image->save(base_path('public/images/services/' . $name_gen));
            $save_url = '/images/services/' . $name_gen;
            $data['image'] = $save_url;
        }
        Service::create($data);
        return response()->json([
            'message' => 'Service created successfully!'
        ], 200);
    }

    // serviceDetails
    public function serviceDetails(Service $service){
        return response()->json([
            'service' => $service
        ]);
    }

    // serviceModify
    public function serviceModify(Service $service){
        return response()->json([
            'service' => $service
        ], 200);
    }

    // serviceUpdate
    public function serviceUpdate(Request $request, Service $service){
        $data = $request->all();
        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen =  time().'.'.$request->file('image')->getClientOriginalExtension();
            $image = $manager->read($request->file('image'));
            $image = $image->resize(200, 200);
            $image->save(base_path('public/images/services/' . $name_gen));
            $save_url = '/images/services/' . $name_gen;
            $data['image'] = $save_url;
        }
        $service->update($data);
        return response()->json([
            'message' => 'Service updated successfully!'
        ], 200);
    }

    // serviceDelete
    public function serviceDelete(Service $service){
        if (file_exists(public_path($service->image))) {
            unlink(public_path($service->image));
        }
        $service->delete();
        return response()->json([
            'service' => $service
        ], 200);
    }
}
