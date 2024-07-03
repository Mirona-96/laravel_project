<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cars', CarController::class);
/*Route::get('/createCar', [CarController::class, 'create']);
Route::post('/cars ', [CarController::class, 'store']);
Route::get('/cars/{id}', [CarController::class, 'show']);*/
