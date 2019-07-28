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
Route::get('/password/reseting/{id}','UserController@forgottend');
Route::post('/ussd/callback','UssdController@index');
Route::get('/aprivacy',function(){
    return view('privacy');
});
Route::get('/aterm',function(){
    return view('term');
});
Route::get('/pusher', function () {
    $message='hey';
    \Alert::message('message','You are welcome to my site ');
    event(new TransactionEvent($message));
    return view('pusher');
});
Route::get('/user/qrcode',"AccountController@index")->middleware('auth');
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
        $account=\App\Account::whereUser_id(Auth::user()->id)->first();
        $transaction=\App\Transaction::whereSender_id($account->id)->get();
        // dd($transaction);
        return view('kwor-admin.index',compact('account','transaction'));
    });
    Route::get('/user/buy',function(){
        return view('kwor-admin.buy_unit');
    });
    Route::get('/user/merc/create',function(){
        return view('kwor-admin.create_merch');
    });
    Route::get('/user/requestunit',function(){
        return view('kwor-admin.requestunit');
    });
    Route::post('/user/requestunit','TransactionController@webRequest');
    Route::post('/user/receiver','TransactionController@acceptRequest');
    Route::get('/user/receiver',function(){
        $account=\App\Account::whereUser_id(\Auth::user()->id)->first();
        $transactions=\App\Transaction::whereReceiver_id($account->id)->whereStatus(0)
        ->get();
        return view('kwor-admin.receiver',compact('transactions','account'));
    });
    Route::get('/user/sendunit',function(){
        $account=\App\Account::whereId(Auth::user()->id)->first();
        return view('kwor-admin.sendunit',compact('account'));
    });
    Route::post('/user/sendunit','AccountController@Transfer');
    Route::get('/user/transact','TransactionController@index');
    Route::get('/user/merc/transact',function(){
        return view('kwor-admin.view-merchant');
    });
});
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/pay','AccountController@redirectToGateWay')->name('pay');
Route::get('payment/callback','AccountController@handleGatewayCallback');
Route::get('/about',function(){
    return view('about');
})->name('about');

Route::get('/contact',function(){
    return view('contact');
})->name('contact');


//flutterwave
Route::post('/payzz', 'AccountController@initialize')->name('pay');
Route::post('/rave/callback', 'AccountController@callback')->name('callback');
Route::get('/f',function(){
    return view('ttt');
});
Route::get('/ttt',function(){
    return view('admin.index');
});
