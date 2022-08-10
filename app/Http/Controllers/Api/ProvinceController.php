<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FetchApiController;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function getProvince (){

        $data = Province::all();

        return response()->json([
            'status'=>true,
            'message'=>'success',
            'data'=>$data
        ]);

    }

    public function searchProvince(Request $request){
    
        $api = $request->input('from-api');
        $id = $request->input('id');

        if (strtoupper($api) === "TRUE") {
            $query = (new FetchApiController)->searchProvince($id);
            return response()->json([
                'status'=>true,
                'message'=>'success',
                'data'=>$query
            ]);
        }else if($id) {
            $query = Province::query();
            $query->whereRaw("province_id LIKE '%". $id . "%'");            
            return response()->json([
                'status'=>true,
                'message'=>'success',
                'data'=>$query->get()
            ]);
        }else{
            $query = Province::query();
            $query->whereRaw("province_id LIKE '%". $id . "%'");            
            return response()->json([
                'status'=>true,
                'message'=>'success',
                'data'=>$query->get()
            ]);
        }
        
        
    }
}
