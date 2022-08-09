<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        $query = Province::query();

        if ($id = $request->input('id')) {
            $query->whereRaw("province_id LIKE '%". $id . "%'");
        }

        return $query->get();
    }
}
