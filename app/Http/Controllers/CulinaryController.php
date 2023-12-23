<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use Illuminate\Http\Request;

class CulinaryController extends Controller
{
    public function index (){
        $data = Culinary::all();

        return response()->json([
            'status' => true,
            'message' => 'List makanan khas daerah indonesia',
            'data' => $data
        ]);
    }
}
