<?php

namespace App\Http\Controllers;
use App\Account;
use App\User;
use Illuminate\Http\Request;
use App\Transaction;
use Paystack;
use Alert;
use Illuminate\Support\Facades\Mail;
use App\Mail\AlertMail;
use Nexmo;
use Auth;
use QrCode;
use Rave;
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
    public function Transfer(Request $request)
    {
        $this->validate($request,[
            "account_number"=>'required',
            'amount'=>'required',
            'purpose'=>'required',
            'transfer_code'=>'required'
        ]);
                //sender_id
                $user_id=Auth::user()->id;
                $account=Account::whereUser_id($user_id)->first();
                $sender_id=$account->id;
                //receiver_id
            if(Account::whereAccount_number($request->account_number)->first()){
            $Racc=Account::whereAccount_number($request->account_number)->first();
                $user=User::whereId($Racc->user_id)->first();
                $rid=$Racc->id;
            if($account->private_key==$request->transfer_code)
            {
                if($account->balance >= $request->amount)
                {
                    // dd($Racc);
                    $account->balance=$account->balance-$request->amount;
                    $account->save();
                    $Racc->balance=$Racc->balance+$request->amount;
                    $Racc->save();
                    //transaction
                    $transaction=new Transaction;
                    $transaction->sender_id=$sender_id;
                    $transaction->receiver_id=$rid;
                    $transaction->amount=$request->amount;
                    $transaction->reason_payment=$request->purpose;
                    $transaction->status=1;
                    $transaction->transaction_code=$this->generateKey();
                    $transaction->save();
                    $tt=Auth::user()->name;
                    $message=[
                        'account'=>$Racc,
                        'name'=>$user->name,
                        "type"=>'credit',
                        'message'=>"{$tt} transferred {$request->amount} unit(s) to you for {$request->purpose}. Your new account balance is {$Racc->balance}"
                    ];
                    Mail::to($user->email)->send(new AlertMail($message));
                    $messages=[
                        'account'=>$account,
                        'type'=>'debit',
                        'name'=>Auth::user()->name,
                        'message'=>"you just transferred {$request->amount} unit(s) to {$user->name} for {$request->purpose}. Your new account balance is {$account->balance}"
                    ];
                    Mail::to(Auth::user()->email)->send(new AlertMail($messages));
                    // $mess=Nexmo::message()->send([
                    //     'to'=>$user->phone,
                    //     'from'=>'KWUO',
                    //     'text'=>"{$tt} transferred {$request->amount} unit(s) to you. Your new account balance is {$Racc->balance}"
                    // ]);
                    // $mes=Nexmo::message()->send([
                    //     'to'=>Auth::user()->phone,
                    //     'from'=>'KWUO',
                    //     'text'=>"you just transferred {$request->amount} unit(s) to {$user->name}. Your new account balance is {$account->balance}"
                    // ]);
                    Alert::success('Success',"you just transferred {$request->amount} unit(s) to {$user->name}");
                    return redirect()->back();
                }else{
                    Alert::error('error','insufficient unit');
                    return redirect()->back();
                }
            }else{
                Alert::error('error','Wrong private key');
                return redirect()->back();
            }
        }else{
            Alert::error('error','Account number is wrong!!');
                    return redirect()->back();
        }
                //
    }
    public function TransferApi(Request $request)
    {
        // $this->validate($request,[
        //     "account_number"=>'required',
        //     'amount'=>'required',
        //     'purpose'=>'required',
        //     'transfer_code'=>'required'
        // ]);
                //sender_id
                $tE=User::whereEmail($request->email)->first();
                $user_id=$tE->id;
                $account=Account::whereUser_id($user_id)->first();
                $sender_id=$account->id;
                //receiver_id
                if(Account::whereAccount_number($request->account_number)->first()){
                $Racc=Account::whereAccount_number($request->account_number)->first();
                $user=User::whereId($Racc->user_id)->first();
                $rid=$Racc->id;
            if($account->private_key==$request->transfer_code)
            {
                if($account->balance >= $request->amount)
                {
                    // dd($Racc);
                    $account->balance=$account->balance-$request->amount;
                    $account->save();
                    $Racc->balance=$Racc->balance+$request->amount;
                    $Racc->save();
                    //transaction
                    $transaction=new Transaction;
                    $transaction->sender_id=$sender_id;
                    $transaction->receiver_id=$rid;
                    $transaction->amount=$request->amount;
                    $transaction->reason_payment=$request->purpose;
                    $transaction->status=1;
                    $transaction->transaction_code=$this->generateKey();
                    $transaction->save();
                    $tt=$tE->name;
                    $message=[
                        'account'=>$Racc,
                        'name'=>$user->name,
                        "type"=>'credit',
                        'message'=>"{$tt} transferred {$request->amount} unit(s) to you for {$request->purpose}. Your new account balance is {$Racc->balance}"
                    ];
                    Mail::to($user->email)->send(new AlertMail($message));
                    $messages=[
                        'account'=>$account,
                        'type'=>'debit',
                        'name'=>Auth::user()->name,
                        'message'=>"you just transferred {$request->amount} unit(s) to {$user->name} for {$request->purpose}. Your new account balance is {$account->balance}"
                    ];
                    Mail::to($tE->email)->send(new AlertMail($messages));
                    // $mess=Nexmo::message()->send([
                    //     'to'=>$user->phone,
                    //     'from'=>'KWUO',
                    //     'text'=>"{$tt} transferred {$request->amount} unit(s) to you. Your new account balance is {$Racc->balance}"
                    // ]);
                    // $mes=Nexmo::message()->send([
                    //     'to'=>$tE->phone,
                    //     'from'=>'KWUO',
                    //     'text'=>"you just transferred {$request->amount} unit(s) to {$user->name}. Your new account balance is {$account->balance}"
                    // ]);
                    // Alert::success('Success',"you just transferred {$request->amount} unit(s) to {$user->name}");
                    return response()->json([
                        "status"=>200,
                        "message"=>"transfer successful",
                        'balance'=>$account->balance
                    ]);
                }else{
                    // Alert::error('error','insufficient unit');
                    return response()->json([
                        "status"=>305,
                        "message"=>"insufficient  balance"
                    ]);
                }
            }else{
                // Alert::error('error','Wrong private key');
                return response()->json([
                    "status"=>405,
                    "message"=>'Wrong private key'
                ]);
            }

        }else{
            return response()->json([
                "status"=>407,
                "message"=>'Number does not exist'
            ]);
        }

                //
    }
    public function  LoadAccount(Request $request)
        {
          $account=Account::whereAccount_number($request->account_number)->first();
          $account->balance=$request->amount +$account->balance;
          if($account->save()){
              $transaction=new Transaction;
              $transaction->receiver_id=$account->id;
              $transaction->sender_id=$account->id;
              $transaction->amount=$request->amount;
              $transaction->reason_payment=$request->gateway;
              $transaction->status=1;
              $transaction->transaction_code=$request->transaction_code;
              if($transaction->save())
              
              {
                $message=[
                    'name'=>auth()->user()->name,
                    "type"=>'fund',
                    'message'=>"you have successfully funded your account. Your new account balance is {$account->balance}"
                ];
                Mail::to(auth()->user()->email)->send(new AlertMail($message));
                  return response()->json([
                        "status"=>201,
                        "message"=>"Units added",
                        "balance"=>$account->balance
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
        public function redirectToGateWay()   
        {
            return Paystack::getAuthorizationUrl()->redirectNow();
        }
        public function handleGatewayCallback()
        {
            $paymentDetails=Paystack::getPaymentData();
            $status=$paymentDetails['status'];
            $amount=$paymentDetails['data']['amount'];
            $amt=$amount/100;
            $id=$paymentDetails['data']['id'];
            $reference=$paymentDetails['data']['reference'];
            $customerEmail=$paymentDetails['data']['customer']['email'];
            // dd($paymentDetails);
            if($status=='true')
            {
                $user=User::whereEmail($customerEmail)->first();
                $id=$user->id;
                $account=Account::whereUser_id($id)->first();
                $account->balance=$account->balance+$amt;
                $account->save();
                $transaction=new Transaction;
                $transaction->sender_id=$account->id;
                $transaction->receiver_id=$account->id;
                $transaction->amount=$amount;
                $transaction->reason_payment='paystack personal payment';
                $transaction->status=1;
                $transaction->transaction_code=$reference;
                  if($transaction->save()){
                 Alert::success('Success','Account has been updated');
                 return redirect('/user/buy')->with('status','Account has been updated');
                    }else{
                        Alert::error('Error','Opps error occured transaction');
                       return redirect('/user/buy')->with('Error','Opps error occured transaction');
                    }
            
               
                }else{
                Alert::error('Error','Error from paystack');
                return redirect('/user/buy')->with('Error','Opps error occured transaction');
                }
        }
        public function index()
        {
            $user=User::whereId(Auth::user()->id)->first();
            $account=Account::whereUser_id($user->id)->whereAccount_type('personal')->first();
            $data=$user->name.' ,'.$account->account_number;
            $qr=QrCode::backgroundColor(100,255,100)->color(255, 255, 255)
                   ->size(350)->generate($data); 
            return view('kwor-admin.qrcode',compact('qr','user'));
        }

        public function initialize()
        {
            Rave::initialize(route('callback'));
        }
        public function callback()
        {
            $data = Rave::verifyTransaction(request()->txref);

    dd($data);
        }

        //verifrave
        public function verifyrave()
        {
          $txref = "rave_12345";
          
          $data = Rave::verifyTransaction($txref);
      
          $chargeResponsecode = $data->data->chargecode;
          $chargeAmount = $data->data->amount;
          $chargeCurrency = $data->data->currency;
          
          $amount = 4500;
          $currency = "NGN";
          if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount)  && ($chargeCurrency == $currency)) {
          // transaction was successful...
          // please check other things like whether you already gave value for this ref
          // if the email matches the customer who owns the product etc
          //Give Value and return to Success page
          
              return redirect('/success');
          
          } else {
              //Dont Give Value and return to Failure page
          
              return redirect('/failed');
          }
        }

        //vazlidate bvnflll
        public function validateBVN()
  {
    $bvn = "12345678901";

    $data = Rave::validateBVN($bvn);

    dd($data);

    // {
    //     "status": "success",
    //     "message": "BVN-DETAILS",
    //     "data": {
    //         "bvn": "12345678901",
    //         "first_name": "Wendy",
    //         "middle_name": "Chucky",
    //         "last_name": "Rhoades",
    //         "date_of_birth": "01-01-1905",
    //         "phone_number": "08012345678",
    //         "registration_date": "01-01-1921",
    //         "enrollment_bank": "044",
    //         "enrollment_branch": "Idejo"
    //     }


    // }
  }



}
