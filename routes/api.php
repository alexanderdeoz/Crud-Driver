<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\VehiculeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//rutas conductores
Route::apiResource('drivers', DriverController::class);
Route::prefix('driver')->group(function () {
    Route::get('{driver}', [DriverController::class, 'index']);
    Route::patch('destroys', [DriverController::class, 'destroys']);
});
Route::prefix('travel')->group(function () {
    Route::get('/', [TravelController::class, 'index']);
}); 
//rutas de vehiculos
Route::apiResource('vehicules', VehiculeController::class);
//rutas de viajes
Route::apiResource('travels',TravelController::class);