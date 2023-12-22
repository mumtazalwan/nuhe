<?php

namespace App\Http\Controllers;

use App\Models\Funfact;
use Illuminate\Http\Request;

class FunfactController extends Controller
{
    public function getFunFact(){
        $data = Funfact::all();

        return response()->json([
            'success' => true,
            'status_code' => 200,
            'data' => $data??[]
        ]);
    }
}
