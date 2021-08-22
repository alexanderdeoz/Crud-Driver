<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\DriverController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::apiResource('drivers', DriverController::class);
// Route::prefix('driver')->group(function () {
//     Route::get('/',[ DriverController::class, 'getAll']);
//     Route::post('/',[ DriverController::class, 'create']);
//     Route::delete('/{id}',[ DriverController::class, 'delete']);
//     Route::get('/{id}',[ DriverController::class, 'get']);
//     Route::put('/{id}',[ DriverController::class, 'update']);
// });
Route::apiResource('drivers', DriverController::class);
Route::prefix('driver')->group(function () {
    Route::get('{driver}', [DriverController::class, 'index']);
    Route::patch('destroys', [DriverController::class, 'destroys']);
});

Route::apiResource('vehicules', VehiculeController::class);

Route::apiResource('travels',TravelController::class);
Route::prefix('travel')->group(function () {
    Route::get('{travels}', [TravelController::class, 'index']);
});
