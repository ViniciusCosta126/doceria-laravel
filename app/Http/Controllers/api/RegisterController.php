<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validated();
        $user = User::create($validated);
        return response()->json($user, 201);
    }

    public function update(User $user, Request $request)
    {
        $validated = $request->validated();
        $user->fill($validated);
        $user->save();
        return response()->json($user, 200);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(null, 204);
    }
}
