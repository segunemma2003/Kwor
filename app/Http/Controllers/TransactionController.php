<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Account;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Notifications\TransactionAlert;
use App\Mail\AlertMail;
use App\Events\TransactionEvent;
use Auth;
use Alert;
use Nexmo;
class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function transactions($id)
     {
         if(!User::wherePhone($id)->exists()){
             return response()->json([
                "status"=>405,
                "message"=>"user not found"
             ]);
         }
         $user=User::wherePhone($id)->first();
         $transactions=Transaction::whereSender_id($user->id)->orWhere('receiver_id',$user->id)->get();
         if($transactions->isEmpty()){
             return response()->json([
                 "status"=>305,
                 "message"=>"No transaction yet"
             ]);
         }
         $result=[];
         foreach($transactions as $transact){
            array_push($result,["sender"=>$transact->accountS->name]);
         }
         return $result; 
        //  response()->json(
        //      [
        //     "sender"=>$transactions->accountS->name,
        //     "receiver"=>$transactions->accountR->name
        //  ]);

     }
    
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
    public function webRequest(Request $request)
    {
        $this->validate($request,[
            "account_number"=>'required',
            'amount'=>'required',
            'purpose'=>'required',
        ]);
        //request_id
        if(Account::whereAccount_number($request->account_number)->exists())
        {
        $user_id=Auth::user()->id;
        $account=Account::whereUser_id($user_id)->first();
        $sender_id=$account->id;
        //receiver_id
       if(Account::whereAccount_number($request->account_number)->first()){
        $Racc=Account::whereAccount_number($request->account_number)->first();
       
        $user=User::whereId($Racc->user_id)->first();
        // dd($Racc);
        $rid=$Racc->id;
        $transaction=new Transaction;
        $transaction->sender_id=$sender_id;
        $transaction->receiver_id=$rid;
        $transaction->amount=$request->amount;
        $transaction->reason_payment=$request->purpose;
        $transaction->transaction_code=$this->generateKey();
        if($transaction->save())
        {
            $tt=Auth::user()->name;
            $message=["message"=>"{$tt} is requesting for {$request->amount}units {$request->purpose}",
        "data"=>$transaction];
            // event(new TransactionEvent($message));
            $messages=[
                'message'=>"{$tt} is requesting for {$request->amount} unit(s) for {$request->purpose}. visit your dashboard to reply"
            ];
            Mail::to($user->email)->send(new AlertMail($messages));

            // $mess=Nexmo::message()->send([
            //     'to'=>$user->phone,
            //     'from'=>'KWUO',
            //     'text'=>"{$tt} is requesting for {$request->amount} unit(s) for {$request->purpose}. visit your dashboard to reply"
            // ]);
            Alert::success('success','You have successfully sent a request');
            return redirect()->back()->with('status','You have successfully sent a request');
        }else{
            Alert::error('error','Opps an error occurred');
            return redirect()->back()->with('error','Opps an error occurred');
        }
    }else{
        Alert::error('error','The account number you inputed is not valid');
        return redirect()->back()->with('error','Opps an error occurred');
    }
}else{
    Alert::error('error','The account number you inputed is not valid');
        return redirect()->back()->with('error','Opps an error occurred');
}

    }
    public function acceptRequest(Request $request)
    {
        // dd($request->all());
        $transact=Transaction::whereTransaction_code($request->transaction_code)->first();

        $tt=Account::whereId($transact->receiver_id)->first();
        if($request->response==1 && ($tt->balance >= $transact->amount))
        {
        
            $transact->status=$request->response;
            $transact->save();
            $account=Account::whereId($transact->sender_id)->first();
            $accounts=Account::whereId($transact->receiver_id)->first();
            $user=User::whereId($account->user_id)->first();
            $userS=User::whereId($accounts->user_id)->first();
            if($accounts->private_key==$request->transfer_code){
                $account->balance=$account->balance +$transact->amount;
                $account->save();
            
        //receiver
        
                $accounts->balance=$accounts->balance - $transact->amount;
                $accounts->save();
                $message=[
                        'message'=>"{$userS->name} accepted your request. Your new account balance is {$account->balance}"
                    ];
                    Mail::to($user->email)->send(new AlertMail($message));
                    $messages=[
                        'message'=>"you just transferred {$transact->amount} unit(s) to {$user->name}. Your new account balance is {$accounts->balance}"
                    ];
                    Mail::to($userS->email)->send(new AlertMail($messages));
        
                // $mess=Nexmo::message()->send([
                //     'to'=>$user->phone,
                //     'from'=>'KWUO',
                //     'text'=>"{$userS->name} accepted your request. Your new account balance is {$account->balance}"
                // ]);
                // $mes=Nexmo::message()->send([
                //     'to'=>$userS->phone,
                //     'from'=>'KWUO',
                //     'text'=>"you just transferred {$transact->amount} unit(s) to {$user->name}. Your new account balance is {$accounts->balance}"
                // ]);
                Alert::success('Success','You have successfully transferred the KWUO units');
                return redirect()->back();
                }else{
                    $messages=[
                        'message'=>"{$userS->name} rejected your request. Your new account balance is {$account->balance}"
                    ];
                    Mail::to($user->email)->send(new AlertMail($messages));
                    // $mess=Nexmo::message()->send([
                    //     'to'=>$user->phone,
                    //     'from'=>'KWUO',
                    //     'text'=>"{$userS->name} rejected your request. Your new account balance is {$account->balance}"
                    // ]);
                Alert::error('error', 'Wrong Transfer code');
                return redirect()->back();
                }   
        }elseif($request->response==1 && ($tt->balance >= $transact->amount)){
            $transact->status=$request->response;
            $transact->reason_reject="insufficient balance";
            $transact->save();
            
            //hjdjh
            $account=Account::whereId($transact->sender_id)->first();
        // $account->balance=$account->balance +$transact->amount;
        // $account->save();
        $user=User::whereId($account->user_id)->first();
        //receiver
        $accounts=Account::whereId($transact->receiver_id)->first();
        // $accounts->balance=$accounts->balance - $transact->amount;
        // $accounts->save();
        $userS=User::whereId($accounts->user_id)->first();
        $messages=[
            'message'=>"{$userS->name} rejected your request. Your new account balance is {$account->balance}"
        ];
        Mail::to($user->email)->send(new AlertMail($messages));
        // hsb
            // $mess=Nexmo::message()->send([
            //     'to'=>$user->phone,
            //     'from'=>'KWUO',
            //     'text'=>"{$userS->name} rejected your request. Your new account balance is {$account->balance}"
            // ]);
        Alert::error('error', 'Insufficient Kwuo Unit(s)');
        return rediect()->back(); 
        }else{
            $transact->status=$request->response;
            $transact->reason_reject=$request->reject;
            $transact->save();
            
            //hjdjh
            $account=Account::whereId($transact->sender_id)->first();
        // $account->balance=$account->balance +$transact->amount;
        // $account->save();
        $user=User::whereId($account->user_id)->first();
        //receiver
        $accounts=Account::whereId($transact->receiver_id)->first();
        // $accounts->balance=$accounts->balance - $transact->amount;
        // $accounts->save();
        $userS=User::whereId($accounts->user_id)->first();
        $messages=[
            'message'=>"{$userS->name} rejected your request. Your new account balance is {$account->balance}"
        ];
        Mail::to($user->email)->send(new AlertMail($messages));
        // hsb
            // $mess=Nexmo::message()->send([
            //     'to'=>$user->phone,
            //     'from'=>'KWUO',
            //     'text'=>"{$userS->name} rejected your request. Your new account balance is {$account->balance}"
            // ]);
        Alert::error('success', 'You rejected the request');
        return redirect()->back();

        }

    }
    public function request(Request $request)
    {
        $account=Account::whereId(1)->first();
        $transaction=$account->accountR;
        broadcast(new TransactionEvent($account,$transaction))->toOthers();

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
            // event(new TransactionEvent($message));
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
                    // event(new TransactionEvent($message));
                     return response()->json([
                        "status"=>202,
                        "message"=>"request is successfully rejected"
                     ]);
                 }
             }elseif($request->response==1)
             {
                
                if($sender->balance > $transact->amount)
                {
                    if($request->private_key == $sender->private_key){
                        $sender->balance=$sender->balance - $transact->amount;
                        $receiver->balance=$receiver->balance + $transact->amount;
                        if($sender->save() && $receiver->save())
                        {
                            $transact->status=1;
                            if($transact->save()){
                                $message="{$userR->name} is has accepted and credited your account with {$transact->amount}units";
                                // event(new TransactionEvent($message));
                                return response()->json([
                                "status"=>201,
                                "message"=>"{$userS->name} has successfully transferred {$transact->amount} to {$userR->name}"
                                ]);
                                }
                        }
                    }else{
                        return response()->json([
                            "status"=>419,
                            "message"=>"private key is wrong"
                        ]);
                    }
                    
                    }else{
                        $transact->status=2;
                    if($transact->save()){
                        $message="{$userR->name} could not credit account";
                    // event(new TransactionEvent($message));
                        return response()->json([
                            "status"=>401,
                            "message"=>"{$userS->name} has no enough units to transfer"
                        ]);
                    }
                }
             }
                
        }
        public function index()
        {
            $account=Account::whereUser_id(\Auth::user()->id)->first();
            $date = \Carbon\Carbon::today()->subDays(7);
            $transactions=Transaction::whereSender_id($account->id)
            ->OrWhere('receiver_id',$account->id)
            ->orderBy('id','desc')
            ->paginate(10);
            $transact=Transaction::whereReceiver_id($account->id)->where('created_at', '>=', $date)
            ->get();
            $stransact=Transaction::whereSender_id($account->id)
            ->where('created_at', '>=', $date)->get();
            $allta=Transaction::whereSender_id($account->id)->get();
            $allre=Transaction::whereReceiver_id($account->id)->get();
            return view('kwor-admin.transact',compact('allre','allta','transactions','stransact','transact'));
        }
        
    }
