<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Account;
use Illuminate\Http\Request;

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
        return User::wherePrivate_key($number)->exists();
    }
    public function request(Request $request)
    {
        $transaction=new Transaction;
        $transaction->sender_id=$request->sender;
        $transaction->receiver_id=$request->receiver;
        $transaction->amount=$request->amount;
        $transaction->reason_payment=$request->purpose;
        $transaction->status=0;
        $transaction->transaction_code=$this->generateKey();
     if(!Transaction::whereSender_id($request->sender)->exists() || !Transaction::whereReceiver($request->receiver)->exist()){
        return response()->json([
            "status"=>405,
            "message"=>"your sender_id or your receiver_id is wrong"
        ]);
     } 
     elseif($transaction->save()){
            return response()->json([
                "status"=>"201",
                "message"=>"request send"
            ]);
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
