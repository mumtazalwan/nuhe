<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index() {
        $data = Destination::all();

        return response()->json([
            'success' => true,
            'code' => 200,
            'data' => $data??[]
        ]);
    }

    public function discovery()
    {
        $data = Destination::whereNotNull('banner')->get();

        $banners = $data->pluck('banner');

        return response()->json([
            'success' => true,
            'code' => 200,
            'data' => $banners??[]
        ]);
    }
}
