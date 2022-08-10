<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthApiController extends Controller
{
    public function login(Request $request){
        $auth = $request->only('email','password');

        if(!Auth::attempt($auth)){
            return response()->json([
                'message' => 'Unauthorized'
            ],401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(
            [
                'message' => ' welcome to '. $user->name,
                'token' => $token,
                'token_type' => 'Bearer',
            ]
        );
    }

    public function logout()
    {
        Auth::user()->tokens()->delete();

        return [
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    }
}
