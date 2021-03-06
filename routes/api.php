<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

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

Route::get('/user/teste', function (Request $request) {

    $data = [
        'token' => '555sisdfsjfgsdfsdkfsdhh'
    ];
    
    return response()->json($data, 200);;
});

Route::post('user/login', [UserController::class, 'login']);
Route::post('user', [UserController::class, 'store']);
Route::middleware('auth:sanctum')->resource('user', UserController::class, ['except' => ['store']]);