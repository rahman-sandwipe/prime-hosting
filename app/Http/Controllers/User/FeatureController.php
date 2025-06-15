<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function featureList()
    {
        $features = Feature::where('status', 'active')
            ->orderBy('created_at', 'desc')
            ->get();
        return response()->json([
            'features' => $features
        ], 200);
    }   // featureList
}
