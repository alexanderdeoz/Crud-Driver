<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\TravelController;  
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::prefix('drivers')->group(function () {
//     Route::get('/',[ DriverController::class, 'index']);
//     Route::post('/',[ DriverController::class, 'store']);
//     Route::delete('/{driver}',[ DriverController::class, 'delete']);
//     Route::get('/{driver}',[ DriverController::class, 'show']);
//     Route::put('/{driver}',[ DriverController::class, 'update']);
// });
// Route::prefix('travel')->group(function () {
//     Route::get('/', [TravelController::class, 'index']);
// }); 
// Route::apiResource('drivers', DriverController::class);
// Route::prefix('driver')->group(function () {
//     Route::get('{driver}', [DriverController::class, 'index']);
//     Route::patch('destroys', [DriverController::class, 'destroys']);
// });


// Route::prefix('drivers')->group(function () {
//     Route::get('/',[ DriverController::class, 'index']);
//     Route::post('/',[ DriverController::class, 'store']);
//     Route::delete('/{driver}',[ DriverController::class, 'delete']);
//     Route::get('/{driver}',[ DriverController::class, 'show']);
//     Route::put('/{driver}',[ DriverController::class, 'update']);
// });
// Route::apiResource('vehicules', VehiculeController::class);

// Route::apiResource('travels',TravelController::class);
