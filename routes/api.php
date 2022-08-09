<?php

use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\ProvinceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ProvinceController::class)->group(function () {
    Route::get('/all/provinces', 'getProvince');
    Route::get('/search/provinces', 'searchProvince');
});

Route::controller(CityController::class)->group(function () {
    Route::get('/all/cities', 'getCities');
    Route::get('/search/cities', 'searchCities');
});
