<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Account;
use App\User;
use Illuminate\Http\Request;
use App\Notifications\TransactionAlert;
use App\Events\TransactionEvent;

class TransactionController extends Controller
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
    public function request(Request $request)
    {
        $sen=Account::whereAccount_number($request->sender)->first();
        $se=$sen->user_id;
        $sender_id=User::whereId($se)->first();
        // var_dump($sen->id);
        $rec=Account::whereAccount_number($request->receiver)->first();
        $re=$rec->user_id;
        // var_dump($rec->id);
        $receiver_id=User::whereId($re)->first();
        if(!Account::whereAccount_number($request->sender)->exists() || !Account::whereAccount_number($request->receiver)->exists()){
            return response()->json([
                "status"=>405,
                "message"=>"your sender_id or your receiver_id is wrong"
            ]);
         }else{
            $transaction=new Transaction;
            $transaction->sender_id=$sen->id;
            $transaction->receiver_id=$rec->id;
            $transaction->amount=$request->amount;
            $transaction->reason_payment=$request->purpose;
            $transaction->status=0;
            $transaction->transaction_code=$this->generateKey();
            if($transaction->save()){
        //get the account
        // User::find(2)->notify(new TransactionAlert);
        
            $message="{$sender_id->name} is requesting for {$request->amount}units";
            event(new TransactionEvent($message));
            return response()->json([
                "status"=>"201",
                "message"=>"request sent",
                "code"=>$transaction->transaction_code
            ]);
        }else{
            return response()->json([
                "status"=>"405",
                "message"=>"Opps something went wrong"
            ]);
        }

    }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
