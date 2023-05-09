<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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


Route::get('/car', [CarController::class, 'index']);
Route::get('/car/{id}', [CarController::class, 'show']);
Route::post('/car', [CarController::class, 'store']);
Route::delete('/car/{id}', [CarController::class, 'delete']);


Route::post('/login', [LoginController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);


