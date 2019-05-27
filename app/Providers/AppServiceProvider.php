<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Transaction;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::composer('layouts.user.*', function ($view) {
            $account=\App\Account::whereUser_id(\Auth::user()->id)->first();
            $view->with('transactCount', Transaction::whereReceiver_id($account->id)->where('status', '==',0)->count());
        });
    }
}
