<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/user/registration', 'UserController@register');
Route::post('/user/login','UserController@login');
Route::post('/user/request','TransactionController@request');
Route::post('/user/response','TransactionController@response');
Route::post('user/fund','AccountController@LoadAccount');
Route::post('/user/verify/','UserController@verifyApi');