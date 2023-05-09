<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request) {
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'city' => $request->city,
            'zip' => $request->zip,
            'message' => $request->message,
            'password' => Hash::make($request->password),
            'address' => $request->address,
        ]);

        return response()->json($user);
    }
}
