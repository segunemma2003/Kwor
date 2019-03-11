<?php

namespace App\Http\Controllers;
use App\Account;
use Illuminate\Http\Request;
use App\Transaction;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function generateKey(){
        $number =uniqid();
        if($this->genKeyExists($number)){
            return $this->generateKey();
        }else{
            return $number;
        }
    }
    public function genKeyExists($number){
        return Transaction::whereTransaction_code($number)->exists();
    }
        public function  LoadAccount(Request $request)
        {
          $account=Account::whereAccount_number($request->account_number)->first();
          $account->balance=$request->amount +$account->balance;
          if($account->save()){
              $transaction=new Transaction;
              $transaction->receiver_id=$account->id;
              $transaction->sender_id=0;
              $transaction->amount=$request->amount;
              $transaction->reason_payment=$request->gateway;
              $transaction->status=1;
              $transaction->transaction_code=$this->generateKey();
              if($transaction->save())
              {
                  return response()->json([
                        "status"=>201,
                        "message"=>"Units added"
                  ]);
              }


          }
          else{
              return response()->json([
                  "status"=>405,
                  "message"=>"Opps an error just occured"
              ]);
          }
        }    
}
