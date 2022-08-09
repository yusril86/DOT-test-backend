<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function getCities (){

        $data = City::all();

        return response()->json([
            'status'=>true,
            'message'=>'success',
            'data'=>$data
        ]);

    }

    public function searchCities(Request $request){
        $query = City::query();

        if ($id = $request->input('id')) {
            $query->whereRaw("city_id LIKE '%". $id . "%'");
        }

        return $query->get();
    }
}
