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
Route::get('/f',function(){
    $client = new \GuzzleHttp\Client();

  
    $myBody["amount"] = "4000";
    $myBody["currency"] = "Naira";
    $myBody["PBFPubKey"] = "FLWPUBK-e6db11d1f8a6208de8cb2f94e293450e-X";
    $myBody['content-type']="application/json";
    $request = $client->post('https://api.ravepay.co/flwv3-pug/getpaidx/api/fee',$myBody);
  
    $response = $request->send();

  

    dd($response);
});
Route::post('/user/registration', 'UserController@register');
Route::post('/user/login','UserController@login');
Route::post('/user/forgotpassword','UserController@forgotten');

Route::post('/user/request','TransactionController@request');
Route::post('/user/response','TransactionController@response');
Route::post('user/fund','AccountController@TransferApi');
Route::post('/user/verify/','UserController@verifyApi');
Route::post('user/load','AccountController@LoadAccount');

Route::post('/password/change','UserController@forgotten');