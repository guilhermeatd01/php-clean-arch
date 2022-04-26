<?php

use App\Http\Controllers\CaObjectiveController;
use App\Http\Controllers\MvcCaObjectiveController;
use App\Http\Controllers\MvcObjectiveController;
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

Route::post('/objective/store-mvc', [MvcObjectiveController::class, 'store']);
Route::post('/objective/store-mvc-ca', [MvcCaObjectiveController::class, 'store']);
Route::post('/objective/store-ca', [CaObjectiveController::class, 'store']);
