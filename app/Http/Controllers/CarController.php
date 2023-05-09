<?php

namespace App\Http\Controllers;
use App\Models\Car;
// use App\Models\;
// use App\Models\Car;

use Illuminate\Http\Request;

class CarController extends Controller
{
    // public function index() {
    //     return response()->json([
    //         'data' => 'Hello',
    //         'status' => 'success',
    //     ]);
    // }

    public function index()
    {
        $cars = Car::all();
        return response()->json($cars);
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return response()->json($car);
    }

    public function store(Request $request)
    {
        $car = Car::create($request->all());
        return response()->json($car);
    }

    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->all());
        return response()->json($car);
    }

    public function delete($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return response()->json([
            'message' => 'success',
        ], 200);
    }
}
