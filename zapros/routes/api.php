<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('user', 'App\Http\Controllers\Zapros\Users@user');
Route::get('tarif', 'App\Http\Controllers\Zapros\Tarifs@tarif');
Route::get('services', 'App\Http\Controllers\Zapros\Services@services');
