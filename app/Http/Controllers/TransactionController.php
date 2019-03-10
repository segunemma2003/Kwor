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

     public function response(Request $request)
        {
            $transact=Transaction::whereTransaction_code($request->code)->first();
            $receiver=Account::whereId($transact->receiver_id)->first();
            $userR=User::whereId($receiver->user_id)->first();
            $sender=Account::whereId($transact->sender_id)->first();
            $userS=User::whereId($sender->user_id)->first();
             if($request->response==2)
             {
                 $transact->reason_reject=$request->reject_message;
                 $transact->status=$request->response;
                 if($transact->save())
                 {
                    $message="{$userR->name} could not credit account";
                    event(new TransactionEvent($message));
                     return response()->json([
                        "status"=>202,
                        "message"=>"request is successfully rejected"
                     ]);
                 }
             }elseif($request->response==1)
             {
                if($sender->balance > $transact->amount)
                {
                    $sender->balance=$sender->balance - $transact->amount;
                    $receiver->balance=$receiver->balance + $transact->amount;
                    if($sender->save() && $receiver->save())
                    {
                        $transact->status=1;
                        if($transact->save()){
                            $message="{$userR->name} is has accepted and credited your account with {$transact->amount}units";
                            event(new TransactionEvent($message));
                        return response()->json([
                            "status"=>201,
                            "message"=>"{$userS->name} has successfully transferred {$transact->amount} to {$userR->name}"
                        ]);
                        }
                    }
                }else{
                    $transact->status=2;
                    if($transact->save()){
                        $message="{$userR->name} could not credt account";
                    event(new TransactionEvent($message));
                        return response()->json([
                            "status"=>401,
                            "message"=>"{$userS->name} has no enough unts to transfer"
                        ]);
                    }
                }
             }
                
        }
    }
