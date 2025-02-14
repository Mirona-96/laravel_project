<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createCar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car = new Car;
        $car->nome = request('nome');
        $car->cor = request('cor');
        $car->empresa = request('empresa');

        $car->save();

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {

        return view('showCar', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view ('edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
       // $car = new Car;
        $car->nome = $request->nome;
        $car->cor = $request->cor;
        $car->empresa = $request->empresa;

        $car->save();

        return redirect('/cars');
        //dd("Actualizado");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car -> delete();
        return redirect('/cars');
    }
}
