<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use Alert;
use Nexmo;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\AlertMail;
use App\Transaction;
use App\Mail\UserEmail;
use Auth;
use QrCode;
class MerchantController extends Controller
{
    
    public  function index()
    {
        $account=Account::whereUser_id(Auth::user()->id)
                ->whereAccount_type('business')->get();
        return $account;
    }
    public function create()
    {
        return;
    }
    public function store(Request $request)
    {
        $account=new Account;
        $account->user_id=Auth::user()->id;
        $account->account_number=$request->phone;
        $account->account_type="business";
        $account->account_name=$request->account_name;
        $account->private_key=uniquid();
        if($account->save())
        {
            QrCode::size(1000)->format('png')->generate($account->account_number, public_path("images/qrcodes/{$account->account_number}.png"));
            Mail::to(Auth::user()->email)->send(new AlertMail(Auth::user()));
        }else{
            Alert::error('Failed to create a merchant account');
            return redirect()->back();
        }

    }
    public function showMerch(Request $request)
    {
        $id=$request->id;
        $account=Account::whereId($id)->first();
        return $account;
    }
    public function merchDelete(Request $request)
    {
        $id=$request->id;
        $account=Account::whereId($id)->first();
        if($account->delete())
        {
            Mail::to(Auth::user()->email)->send(new AlertMail(Auth::user()));
            Alert::success("Account has been successfully deleted");
            redirect()->back();
        }else{
            Alert::error("Opps!!!! something went wrong");
            redirect()->back(); 
        }
    }
}
