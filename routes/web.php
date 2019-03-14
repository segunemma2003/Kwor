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
Route::get('/verify/{verify}/{id}','UserController@verify')->name('verify');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
