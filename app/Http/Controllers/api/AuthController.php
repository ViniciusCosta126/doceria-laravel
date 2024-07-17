<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = $request->user();


            $token = $user->createToken('token');
            return response()->json(['message' => "Autorizado", 'token' => $token->plainTextToken, 'user' => $user], 200);
        }

        return response()->json('Não autorizado', 401);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json("Token Revoked", 200);
    }
}
