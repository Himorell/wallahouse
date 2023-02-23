<?php

namespace App\Http\Controllers\Api;

use App\Models\House;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $houses = House::all();
        return response()->json($houses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'price' => 'required|numeric',
            'title' => 'required|string',
            'category' => 'required|string',
            'rooms' => 'required|integer',
            'baths' => 'required|integer',
            'persons' => 'required|integer',
            'population' => 'required|string',
            'province' => 'required|string',
            'preferences' => 'required|string',
            'name_property' => 'required|string',
            'phone' => 'required|string',
        ]);

        $house = House::create($validatedData);

        return response()->json($house, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $house = House::find($id);
        return response()->json($house);

        $house = House::find($id);

    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    
        //
        public function update(Request $request, $id)
    {
        $house = House::find($id);

        if (!$house) {
            return response()->json(['message' => 'House not found'], 404);
        }

        $validatedData = $request->validate([
            'price' => 'numeric',
            'title' => 'string',
            'category' => 'string',
            'rooms' => 'integer',
            'baths' => 'integer',
            'persons' => 'integer',
            'population' => 'string',
            'province' => 'string',
            'preferences' => 'string',
            'name_property' => 'string',
            'phone' => 'string',
        ]);

        $house->update($validatedData);

        return response()->json($house);
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $house = House::find($id);

        if (!$house) {
            return response()->json(['message' => 'House not found'], 404);
        }

        $house->delete();

        return response()->json(['message' => 'House deleted']);
    }
}
