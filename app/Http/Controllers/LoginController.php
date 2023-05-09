<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(Request $request) {
        // $request->validate([
        //     'username' => 'required',
        //     'password' => 'required',
        // ]);

        // if(Auth::attempt($request->all())) {
        //     return response
        // }

        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        //if validation fails
        if($validate->fails()) {
            return response()->json($validate->errors(), 422);
        }

        //get credentials from request
        $credentials = $request->only('email', 'password');

        //if auth failed
        $token = JWTAuth::attempt($credentials);
        if(!$token) {
            return response()->json([
                'success' => false,
                'message' => 'Email atau Password anda salah',
            ], 401);
        }

        //if auth successful
        return response()->json([
            'success' => true,
            'dataUser' => auth()->user(),
            'token' => $token,
        ], 200);

    }
}
