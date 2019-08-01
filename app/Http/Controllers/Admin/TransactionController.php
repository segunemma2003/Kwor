<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaction;
use Session;
class TransactionController extends Controller
{
    public function index()
    {
        $transaction=Transaction::all();
        return view('admin.transaction');
    }
    public function pending()
    {
        return view('admin.pendTransaction');
    }
    public function history()
    {
        return view('admin.hisTransaction');
    }
    public function request()
    {
        return view('admin.reTransaction');
    }
   
}