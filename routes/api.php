<?php

use App\Http\Controllers\API\KlasemenController;
use App\Http\Controllers\API\PertandinganController;
use App\Http\Controllers\API\TeamController;
use App\Http\Controllers\UserController;
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

// Route::get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([], function () {
// Route::middleware('auth:sanctum', 'verified')->group(function () {

    Route::apiResource('/user', UserController::class);

    Route::apiResource('/team', TeamController::class);

    Route::apiResource('/pertandingan', PertandinganController::class);

    Route::apiResource('/klasemen', KlasemenController::class);
});
