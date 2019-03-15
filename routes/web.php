<?php
use App\Events\TransactionEvent;
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

Route::get('/pusher', function () {
    $message='hey';
    \Alert::message('message','You are welcome to my site ');
    event(new TransactionEvent($message));
    return view('pusher');
});
Route::get('/', function () {
    return view('index');
});
Route::post('/user/login','UserController@logins')->name('logins');
Route::get('/user/login',function(){
    return view('auth.login');
});
Route::get('/verify/{verify}/{id}','UserController@verify')->name('verify');
Route::get('user/logout',function(){
    Auth::logout();
    return redirect('/login');
});
Auth::routes();
Route::group(['middleware'=>'auth'],function(){
    Route::get('/users',function(){
        return view('kwor-admin.index');
    });
    Route::get('/user/buy',function(){
        return view('kwor-admin.buy_unit');
    });
    Route::get('/user/merc/create',function(){
        return view('kwor-admin.create_merch');
    });
    Route::get('/user/receiver',function(){
        return view('kwor-admin.receiver');
    });
    Route::get('/user/requestunit',function(){
        return view('kwor-admin.sendunit');
    });
    Route::get('/user/transact',function(){
        return view('kwor-admin.transact');
    });
    Route::get('/user/merc/transact',function(){
        return view('kwor-admin.view-merchant');
    });
});
Route::get('/home', 'HomeController@index')->name('home');
