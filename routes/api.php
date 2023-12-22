<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\FunfactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
  Route::get('/getprovince', [ProvinceController::class, 'index']);
//  Route::post('/', [ProvinceController::class, 'store']);
//  Route::get('/{id}', [ProvinceController::class, 'show']);
//  Route::delete('/{id}', [ProvinceController::class, 'destroy']);
  Route::get('/carousel/discovery', [DestinationController::class, 'discovery']);
  Route::get('/destination', [DestinationController::class, 'index']);
//  Route::get('/province/{id}');
//  Route::get('/kuliner');
  Route::get('/funfact', [FunfactController::class, 'getFunFact']);
  Route::get('/getprovince/detail/{id}', [ProvinceController::class, 'detail']);
  Route::get('/kuliner',);

