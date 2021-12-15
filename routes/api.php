<?php

use App\Http\Controllers\DataKucingController;
use App\Http\Controllers\GetIdController;
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

Route::get('kucing',[DataKucingController::class, 'index']);
Route::get('Idkucing',[GetIdController::class, 'showId']);
Route::post('kucing',[DataKucingController::class, 'create']);
Route::put('kucing',[DataKucingController::class, 'update']);
Route::delete('kucing',[DataKucingController::class, 'delete']);
