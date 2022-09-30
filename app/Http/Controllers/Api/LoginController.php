<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validateLogin($request);

        if (Auth::attempt($request->only(['email', 'password']))) {
            return response()-> json([
                'token' => Auth::user()->createToken($request->name)->plainTextToken,
                'message' => 'Login Successfully',
            ]);
        }

        return response()->json([
            'message' => 'Login Failed',
        ], 401);
    }

    public function validateLogin(Request $request)
    {
        return $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
            'name' => 'required|string'
        ]);
    }
}
