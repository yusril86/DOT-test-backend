<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FetchApiController;
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
        $api = $request->input('API');
        $id = $request->input('id');

        if (strtoupper($api) === "TRUE") {
            $query = (new FetchApiController)->searchCities($id);
            return response()->json([
                'status'=>true,
                'message'=>'success',
                'data'=>$query
            ]);
        }else{
            $query = City::query();
            $query->whereRaw("city_id LIKE '%". $id . "%'");            
            return response()->json([
                'status'=>true,
                'message'=>'success',
                'data'=>$query->get()
            ]);
        }
    }
}
