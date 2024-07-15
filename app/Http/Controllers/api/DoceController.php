<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DoceRequest;
use App\Models\Doce;
use Illuminate\Http\Request;

class DoceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Doce::with('categoria')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoceRequest $request)
    {
        $doce = Doce::create($request->all());
        return response()->json($doce, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoceRequest $request, Doce $doce)
    {
        $doce->fill($request->all());
        $doce->save();
        return response()->json($doce, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doce $doce)
    {
        $doce->delete();
        return response()->json(null, 204);
    }
}
