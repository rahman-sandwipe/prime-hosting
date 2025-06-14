<?php

namespace App\Http\Controllers\Admin;

use App\Models\Server;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ServerController extends Controller
{
    public function ServersPage(){
        return view('backend.pages.serverPage');
    }    // serverPage

    public function serverList(){
        $servers = Server::all();
        return response()->json([
            'servers' => $servers
        ], 200);
    }    // serverList

    public function serverInsert(Request $request){
        $data = $request->all();
        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen =  time().'.'.$request->file('image')->getClientOriginalExtension();
            $image = $manager->read($request->file('image'));
            $image = $image->resize(200, 200);
            $image->save(base_path('public/images/servers/' . $name_gen));
            $save_url = '/images/servers/' . $name_gen;
            $data['image'] = $save_url;
        }
        Server::create($data);
        return response()->json([
            'message' => 'Server created successfully!'
        ], 200);
    }    // serverInsert

    public function serverDetails(Server $server){
        return response()->json([
            'server' => $server
        ]);
    }    // serverDetails

    public function serverModify(Server $server){
        return response()->json([
            'server' => $server
        ], 200);
    }    // serverModify

    public function serverUpdate(Request $request, Server $server){
        $data = $request->all();
        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen =  time().'.'.$request->file('image')->getClientOriginalExtension();
            $image = $manager->read($request->file('image'));
            $image = $image->resize(200, 200);
            $image->save(base_path('public/images/servers/' . $name_gen));
            $save_url = '/images/servers/' . $name_gen;
            $data['image'] = $save_url;
        }
        $server->update($data);
        return response()->json([
            'message' => 'Server updated successfully!'
        ], 200);
    }    // serverUpdate

    public function serverDelete(Server $server){
        if (file_exists(public_path($server->image))) {
            unlink(public_path($server->image));
        }
        $server->delete();
        return response()->json([
            'server' => $server
        ], 200);
    }    // serverDelete
}
