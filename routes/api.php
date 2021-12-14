<?php


use App\Http\Controllers\VehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('veicle/index', [VehicleController::class, 'index']);

Route::post('veicle/create', [VehicleController::class, 'store']);

Route::get('vehicle/show', [VehicleController::class, 'show']);

Route::get('vehicle/marck', [VehicleController::class, 'showVehiclesByMarkes']);

Route::get('vehicle/search', [VehicleController::class, 'search']);