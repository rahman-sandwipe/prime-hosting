<?php

namespace App\Http\Controllers\User;

use App\Models\Server;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServerController extends Controller
{
    public function serverPage(){
        return view('user.pages.serverPage');
    }   // serverPage

    public function serverList() {
        $servers = Server::all();
        return response()->json([
            'servers' => $servers
        ]);
    }    // serverList

    public function serverDetails(Server $server) {
        return response()->json([
            'server' => $server
        ]);
    }    // serverDetails
}
